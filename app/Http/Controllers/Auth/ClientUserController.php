<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Users;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientAuthController extends Controller
{
public function processLoginAdmin(Request $request)
 {
    $this->validate($request, [
        'username' => 'required',
    ]);

    $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'user_email' : 'user_username';

    $data = [
        $field => $request->input('username'),
    ];

    // Authenticate the user based on username or email
    $user = Users::where($data)->first();

    if ($user) {
        // Create a user session
        auth()->login($user);
        if ($user->user_role === 'admin') {
            return redirect('/index2');
        } elseif ($user->user_role === 'petugas') {
            return redirect('/dashboardpetugas');
        } elseif ($user->user_role === 'juri') {
            return redirect('/dashboardjuri');
        } elseif ($user->user_role === 'user') {
            return redirect('/overviewpeserta');
        } else {
            // Jika peran tidak dikenali, arahkan ke halaman admin
            return redirect('/index2');
        }
    } else {
        Session::flash('message', 'Username or Email not found!'); 
        Session::flash('alert-class', 'alert-danger'); 
        return redirect('/login');
    }
    
 }
public function processLoginPetugas(Request $request)
{
    
            $this->validate($request, [
                'username' => 'required',
            ]);
        
            $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'user_email' : 'user_username';
        
            $data = [
                $field => $request->input('username'),
            ];
        
            // Authenticate the user based on username or email
            $user = Users::where($data)->first();
        
            if ($user) {
                // Create a user session
                auth()->login($user);
                if ($user->user_role === 'petugas') {
                    return redirect('/dashboardpetugas');
                } elseif ($user->user_role === 'admin') {
                    return redirect('/dashboardadmin');
                } elseif ($user->user_role === 'juri') {
                    return redirect('/dashboardjuri');
                } elseif ($user->user_role === 'user') {
                    return redirect('/overviewpeserta');
                } else {
                    return redirect('/dashboardpetugas');
                }
            } else {
                Session::flash('message', 'Username or Email not found!'); 
                Session::flash('alert-class', 'alert-danger'); 
                return redirect('/login');
            }
            
}
public function processLoginJuri(Request $request)
{
        
                $this->validate($request, [
                    'username' => 'required',
                ]);
            
                $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'user_email' : 'user_username';
            
                $data = [
                    $field => $request->input('username'),
                ];
            
                // Authenticate the user based on username or email
                $user = Users::where($data)->first();
            
                if ($user) {
                    // Create a user session
                    auth()->login($user);
                    if ($user->user_role === 'juri') {
                        return redirect('/dashboardjuri');
                    } elseif ($user->user_role === 'admin') {
                        return redirect('/dashboardadmin');
                    } elseif ($user->user_role === 'petugas') {
                        return redirect('/dashboardpetugas');
                    } elseif ($user->user_role === 'user') {
                        return redirect('/overviewpeserta');
                    } else {
                        return redirect('/dashboardjuri');
                    }
                } else {
                    Session::flash('message', 'Username or Email not found!'); 
                    Session::flash('alert-class', 'alert-danger'); 
                    return redirect('/login');
}

public function processLoginUser(Request $request)
{
    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
    ]);

    $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'user_email' : 'user_username';

    $data = [
        $field => $request->input('username'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($data)) {
        $user = Auth::user();
        $verify = $user->email_verified_at;

        if ($user->user_role === 'user' && $verify != null) {
            return redirect('/');
        } else if ($user->user_role === 'user' && $verify == null) {
            Session::flash('message', 'Account has not been Verified'); 
            Session::flash('alert-class', 'alert-warning'); 
            return redirect('/login');
        } else {
            // Redirect user based on their role
            switch ($user->user_role) {
                case 'admin':
                    return redirect('/admin-dashboard');
                    break;
                case 'juri':
                    return redirect('/juri-dashboard');
                    break;
                case 'petugas':
                    return redirect('/petugas-dashboard');
                    break;
                default:
                    return redirect('/index2');
            }
        }
    } else {
        Session::flash('message', 'Username or Password Incorrect!'); 
        Session::flash('alert-class', 'alert-danger'); 
        return redirect('/login');
    }
}

  




















    public function processLogoutAdmin()
    {
        Auth::logout();
        return redirect('/');
    }

    public function processLogoutPetugas()
    {
        Auth::logout();
        return redirect('/');
    }
    public function processLogoutJuri()
    {
        Auth::logout();
        return redirect('/');
    }
    public function processLogoutUser()
    {
        Auth::logout();
        return redirect('/');
    }
}
}

