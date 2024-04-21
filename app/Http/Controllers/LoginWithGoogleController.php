<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginWithGoogleController extends Controller
{
     public function googlepage()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = Users::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('overviewpeserta');
       
            }else{
                $newUser = Users::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('overviewpeserta');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}