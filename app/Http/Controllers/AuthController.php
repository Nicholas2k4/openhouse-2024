<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function login() {
        return view('user.login');
    }

    public function googleAuth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function processLogin()
    {
        $user = Socialite::driver('google')->user();
        if ($user) {
            $email = strtolower($user->getEmail());
            $nrp = strtolower(explode('@', $email)[0]);
            $name = $user->getName();

            session(['email' => $email]);
            session(['nrp' => $nrp]);
            session(['name' => $name]);

            return redirect()->route('user.home');
        }
    }
}
