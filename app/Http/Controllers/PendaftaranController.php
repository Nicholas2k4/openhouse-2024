<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DetailRegistration;
use App\Models\Ukm;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function payment(){
        
    }

    public function dummy(){
        return view ('user.dummy');
    }

    public function redirect(Request $request){
        $name = session('name');
        $nrp = session('nrp');
        $email = session('email');

        // logic redirect audisi / pembayaran & slot
        $ukm_slug = $request->query('ukm');
        $ukm = Ukm::where('slug', $ukm_slug)->first();
        $ukm_id = $ukm->id;
        $user = User::where('nrp', $nrp)->first();
        $detail_registration = DetailRegistration::where('user_id', $user->id)->where('ukm_id', $ukm->id)->first();

        if (!$detail_registration){ //kalau belum ada record
            return view('user.pendaftaran', compact('name', 'nrp','email', 'ukm_id')); 
        } else { //udah memasukan data diri
            if ($ukm_slug == 'vg' || $ukm_slug == 'ilustrasi'){
                if ($detail_registration->file_validated == 0){ //vg / ilus & belum diterima
                    return view('user.wait', compact('name', 'nrp','email', 'ukm_slug'));
                } else { // vg / ilus & sudah diterima
                    $code = $detail_registration->code;
                    return view('user.pembayaran', compact('name', 'nrp','email','code', 'ukm_id'));
                }
            } else { //udah memasukan data diri & bukan dari vg / ilus
                $code = $detail_registration->code;
                return view('user.pembayaran', compact('name', 'nrp','email','code', 'ukm_id'));
            }
        }

        return view('user.pendaftaran', compact('name', 'nrp','email'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nrp' => 'required|string|max:9',
            'line_id' => 'required|string|max:255',
            'drive_url' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
        ]);



        // Cari user berdasarkan NRP
        $user = User::where('nrp', $request->nrp)->first();
        // cari ukm berdasarkan slug
        $ukm_id = $request->ukm_id;
        $ukm = Ukm::where('id', $ukm_id)->first();
        $current_slot = $ukm->current_slot;

        // cek current slot apakah masih ada
        if ($current_slot <= 1){
            return back()->with('warning', 'slot habis');
        }else{
            $current_slot = $current_slot -1;
        }

        if ($user) {
            $user->timestamps = false;
            // Update id_line pada user
            $user->update(['line_id' => $request->line_id]);
            $user->update(['phone' => $request->line_id]);

            // update ukm slot
            $ukm->update(['current_slot' => $current_slot]);

            // Simpan data ke tabel detail_registration
            DetailRegistration::create([
                'user_id' => $user->id,
                'ukm_id' => $ukm->id,
                'payment' => null,
                'code' => Str::random(4), // Menghasilkan string acak 4 karakter,
                'drive_url' => $request->drive_url,
                'file_validated' => 0,
                'payment_validated' => 0,
            ]);

            return back()->with('success', 'Pendaftaran berhasil');
        } else {
            User::create([
                'id' => (string)Str::uuid(),
                'name' => $request->name,
                'nrp' => $request->nrp,
                'line_id' => $request->line_id,
                'phone' => $request->phone,
            ]);

            $user = User::where('nrp', $request->nrp)->first();
            DetailRegistration::create([
                'user_id' => $user->id,
                'ukm_id' => $ukm->id,
                'payment' => null,
                'code' => Str::random(4), // Menghasilkan string acak 4 karakter,
                'drive_url' => $request->drive_url,
                'file_validated' => 0,
                'payment_validated' => 0,
            ]);

            $ukm->update(['current_slot' => $current_slot]);
            return back()->with('success', 'Pendaftaran berhasil');
        }
    }
}