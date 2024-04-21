<?php

namespace App\Http\Controllers;

use App\Models\Users; // Mengubah dari User menjadi Users
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrasiAdministratorController extends Controller 
{
    // Index
    public function index()
    {
        // Ambil data dari tabel users
        $registrasis = Users::orderBy('name', 'asc')->get(); // Ubah 'username' menjadi 'asc' karena orderBy hanya menerima satu argumen

        // Buat respons JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Registrasi',
            'data' => $registrasis
        ], 200);
    }

    // Show
    public function show($id)
    {
        // Temukan registrasi berdasarkan ID
        $registrasi = Users::findOrFail($id); 

        // Buat respons JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Registrasi',
            'data' => $registrasi
        ], 200);
    }

    // Store
    public function store(Request $request)
    {
        // Set validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required', 
            'username' => 'required|unique:users', // Tambahkan aturan unik untuk username
            'password' => 'required|min:6',
            'role' => 'required|in:admin,petugas,juri' // Hanya role admin, petugas, dan juri yang diperbolehkan
        ]);

        // Respons kesalahan validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Simpan ke database
        $registrasi = Users::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        // Sukses menyimpan ke database
        if ($registrasi) {
            return response()->json([
                'success' => true,
                'message' => 'Registrasi berhasil',
                'data' => $registrasi
            ], 201);
        }

        // Gagal menyimpan ke database
        return response()->json([
            'success' => false,
            'message' => 'Registrasi gagal',
        ], 409);
    }

    // Update
    public function update(Request $request, $id)
    {
        // Set validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id, // Tambahkan aturan unik untuk username, kecuali untuk ID saat ini
            'password' => 'required|min:6',
            'role' => 'required|in:admin,petugas,juri' // Hanya role admin, petugas, dan juri yang diperbolehkan
        ]);

        // Respons kesalahan validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Temukan registrasi berdasarkan ID
        $registrasi = Users::findOrFail($id);

        // Jika registrasi ditemukan
        if ($registrasi) {
            // Update registrasi
            $registrasi->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role' => $request->role
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data registrasi berhasil diupdate',
                'data' => $registrasi
            ], 200);
        }

        // Data registrasi tidak ditemukan
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan',
        ], 404);
    }

    // Destroy
    public function destroy($id)
    {
        // Temukan registrasi berdasarkan ID
        $registrasi = Users::findOrFail($id);

        // Jika registrasi ditemukan
        if ($registrasi) {
            // Hapus registrasi
            $registrasi->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data registrasi berhasil dihapus',
            ], 200);
        }

        // Data registrasi tidak ditemukan
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan',
        ], 404);
    }
}
