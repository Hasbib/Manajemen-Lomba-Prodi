<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Memeriksa apakah pengguna telah login
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Memeriksa peran pengguna
        $userRole = auth()->user()->role;

        // Memeriksa apakah peran pengguna sesuai dengan yang diizinkan
        if (!in_array($userRole, $roles)) {
            // Redirect pengguna sesuai dengan peran mereka
            switch ($userRole) {
                case 'admin':
                    return redirect('/index2');
                    break;
                case 'petugas':
                    return redirect('/dashboardpetugas');
                    break;
                case 'juri':
                    return redirect('/dashboardjuri');
                    break;
                case 'user':
                    return redirect('/overviewpeserta');
                    break;
                default:
                    return redirect('/');
            }
        }

        return $next($request);
    }
}
