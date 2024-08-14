<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Admin;
use App\Models\Division;
use App\Models\Ukm;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // protected $stateless = false;
    public function login()
    {
        return view('user.login');
    }

    public function googleAuth($type)
    {
        session(['auth_type' => $type]);
        return Socialite::driver('google')->redirect();
    }

    public function processLogin()
    {
        $auth_type = session('auth_type');
        $user = Socialite::driver('google')->user();
        if ($user) {
            $email = strtolower($user->getEmail());
            $nrp = strtolower(explode('@', $email)[0]);
            $name = $user->getName();

            session(['email' => $email]);
            session(['nrp' => $nrp]);
            session(['name' => $name]);

            if ($auth_type == 'user') {
                return redirect()->route('user.home');
            } else if ($auth_type == 'admin') {
                // cek ada di tabel admin ato ga
                $admin = Admin::where('nrp', $nrp)->first();

                if ($admin) {
                    $ukm_id = $admin->ukm_id;
                    $field = $admin->field;
                    $division_id = $admin->division_id;

                    session()->put('ukm_id', $ukm_id);
                    session()->put('field', $field);
                    session()->put('division_id', $division_id);

                    return redirect()->route('admin.validate');
                } else {
                    return redirect()->route('admin.login')->with('error', 'Anda bukan admin');
                }
            }
            // return redirect()->route('user.home');
        }
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('user.home')->with('logout', 'Logout Success!');
    }

    public function adminLogout()
    {
        session()->flush();

        return redirect()->route('admin.login');
    }
}
