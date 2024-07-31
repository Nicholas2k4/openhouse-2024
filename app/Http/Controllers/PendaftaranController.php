<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|numeric',
            'ukm_id' => 'required|numeric',
        ]);

        // Simpan data ke database
        Pendaftaran::create([
            'user_id' => $request->user_id,
            'ukm_id' => $request->ukm_id,
            'status_diterima' => false,
            'status_pembayaran' => false,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}
