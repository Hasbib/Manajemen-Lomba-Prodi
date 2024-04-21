<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lombas;

class LombaController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name_lomba' => 'required|string', // Pastikan name_lomba diberikan dan bertipe string
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Ambil data dari request
        $nameLomba = $request->input('name_lomba');

        // Proses penyimpanan data ke database atau melakukan operasi lainnya
 
        $lomba = new Lombas(); // Menggunakan model Lombas
        $lomba->name_lomba = $nameLomba;
        $lomba->save();        

        // Beri respon sesuai kebutuhan, contoh:
        return response()->json(['message' => 'Data Lomba berhasil disimpan', 'name_lomba' => $nameLomba], 200);
    }
}
