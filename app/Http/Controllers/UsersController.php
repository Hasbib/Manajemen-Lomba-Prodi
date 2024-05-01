<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function daftar()
    {
        return Inertia::render('Login', [
            'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50'],
            'username' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'password' => ['required'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['role'] = $request->input('role', 'peserta');

        $user = User::create($validatedData);

        switch ($validatedData['role']) {
            case 'admin':
                return redirect()->route('administrator');
            case 'juri':
                return redirect()->route('administrator');
            case 'petugas':
                return redirect()->route('administrator');
            case 'peserta':
                return redirect()->route('login');
            default:
                break;
        }
    }


    public function show(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user && password_verify($credentials['password'], $user->password)) {
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('index2');
                    break;
                case 'petugas':
                    return redirect()->route('dashboardpetugas');
                    break;
                case 'juri':
                    return redirect()->route('dashboardjuri');
                    break;
                case 'peserta':
                    return redirect()->route('overviewpeserta');
                    break;
                default:
                    // Handle default case (optional)
                    break;
            }
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }


}