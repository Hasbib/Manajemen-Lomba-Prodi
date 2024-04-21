<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Users; // Menggunakan singular "User" sesuai konvensi Laravel
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginWithGoogleController extends Controller
{
    public function googlepage()
    {
        try {
            return Socialite::driver('google')->redirect();
        } catch (Exception $e) {
            // Menangani kesalahan Socialite dengan memberikan respons yang sesuai
            return redirect()->route('index')->withErrors(['error' => 'Gagal mengalihkan ke Google untuk login.']);
        }
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $existingUser = Users::where('google_id', $user->id)->first();

            if ($existingUser) {
                Auth::login($existingUser);

                // Redirect langsung ke halaman overview peserta setelah berhasil login
                return redirect()->route('overviewpeserta');
            } else {
                $newUser = Users::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'email_verified_at' => now(),
                ]);

                Auth::login($newUser);

                // Redirect langsung ke halaman overview peserta setelah berhasil login
                return redirect()->route('overviewpeserta');
            }
        } catch (Exception $e) {
            // Menangani kesalahan autentikasi dengan memberikan respons yang sesuai
            return redirect()->route('index')->withErrors(['error' => 'Gagal melakukan autentikasi dengan Google.']);
        }
    }
}
