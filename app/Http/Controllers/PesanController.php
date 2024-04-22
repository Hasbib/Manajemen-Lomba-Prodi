<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Pesan;

class PesanController extends Controller
{
    //
    // public function index()
    // {
    //     return Inertia::render('Users/Index', [
    //       'users' => User::all(),
    //     ]);
    // }

    public function store(Request $request)
    {
        Pesan::create($request->validate([
            'nama' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'nomor' => ['required', 'max:50'],
            'pesan' => ['required', 'max:250'],
        ]));

        return to_route('pesan.index');
    }
}