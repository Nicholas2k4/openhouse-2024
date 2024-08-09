<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login() {
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

            if($auth_type == 'user'){
                return redirect()->route('user.home');

            } else if ($auth_type == 'admin'){
                // cek ada di tabel admin ato ga
                $admin = Admin::where('nrp', $nrp)->first();

                if ($admin){
                    $ukm_id = $admin->ukm_id;
                    $field = $admin->field;
                    $division_id = $admin->division_id;
                    return redirect()->route('admin.showParticipants')
                    ->with([
                        'ukm_id' => $ukm_id,
                        'field' => $field,
                        'division_id' => $division_id
                    ]);
                } else {
                    return redirect()->route('admin.login')->with('error', 'Anda bukan admin');
                }
            }


            // return redirect()->route('user.home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout user dari session
        $request->session()->invalidate(); // Menghapus semua data session
        $request->session()->regenerateToken(); // Mencegah CSRF setelah logout

        return redirect()->route('admin.login')->with('info', 'Sukses logout');
    }
}
