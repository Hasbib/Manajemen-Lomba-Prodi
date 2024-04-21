<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class ClientAuthController extends Controller
{
    public function processLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
        ]);

        $data = [
            'username' => $request->input('username'), // Hanya menggunakan username
        ];

        // Authenticate the user based on username
        $user = Users::where('username', $request->input('username'))->first();

        if ($user) {
            // Create a user session
            auth()->login($user);
            switch ($user->user_role) {
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
                    return redirect('/'); // Redirect to homepage if user role is not recognized
            }
        } else {
            Session::flash('message', 'Username not found!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/login');
        }
    }

    public function processLoginUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->input('username'), // Hanya menggunakan username
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $verify = $user->email_verified_at;

            if ($user->user_role === 'user' && $verify != null) {
                return redirect('/overviewpeserta');
            } elseif ($user->user_role === 'user' && $verify == null) {
                Session::flash('message', 'Account has not been Verified');
                Session::flash('alert-class', 'alert-warning');
                return redirect('/login');
            } else {
                // Redirect user based on their role
                switch ($user->user_role) {
                    case 'admin':
                        return redirect('/index2');
                        break;
                    case 'juri':
                        return redirect('/dashboardjuri');
                        break;
                    case 'petugas':
                        return redirect('/dashboardpetugas');
                        break;
                    default:
                        return redirect('/overviewpeserta');
                }
            }
        } else {
            Session::flash('message', 'Username or Password Incorrect!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/login');
        }
    }

    public function processLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
