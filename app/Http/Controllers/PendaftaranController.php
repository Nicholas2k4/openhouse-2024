<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DetailRegistration;
use App\Models\Ukm;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nrp' => 'required|string|max:9',
            'line_id' => 'required|string|max:255',
            'drive_url' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
        ]);

        // dummy
        $id_ukm = 1;

        // Cari user berdasarkan NRP
        $user = User::where('nrp', $request->nrp)->first();

        // cari ukm berdasarkan id
        $ukm = Ukm::where('id', $id_ukm)->first();
        $current_slot = $ukm->current_slot;

        // cek current slot apakah masih ada
        if ($current_slot <= 1){
            return back()->with('success', 'slot habis');
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
                'ukm_id' => 1,
                'payment' => null,
                'code' => 'xyxy',
                'drive_url' => $request->drive_url,
                'file_validated' => 0,
                'payment_validated' => 0,
            ]);

            return back()->with('success', 'Pendaftaran berhasil');
        } else {
            return back()->with('error', 'User dengan NRP tersebut tidak ditemukan');
        }
    }
}