<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Method untuk menangani permintaan Ajax dan mengembalikan hasil query berdasarkan aktivitas
    public function getUsersByActivity(Request $request)
    {
        // Ambil nilai slug dari request
        $slug = $request->input('slug');

        // Query untuk mendapatkan data pengguna berdasarkan slug
        $results = DB::table('users as u')
            ->join('detail_registrations as dr', 'u.nrp', '=', 'dr.nrp')
            ->join('ukm', 'dr.ukm_id', '=', 'ukm.id')
            ->where('ukm.slug', '=', $slug)
            ->select('u.name', 'u.nrp', 'u.line_id', 'u.phone')
            ->get();

        // Mengembalikan hasil dalam format JSON
        return response()->json($results);
    }
    public function validatePage()
    {
        $data['tabTitle'] = 'Validate';
        return view('admin.validate', $data);
    }

    public function generatePage()
    {
        $data['tabTitle'] = 'Generate';
        return view('admin.generate', $data);
    }

    public function participant()
    {
        return view('.admin.participant');
    }

    public function login()
    {
        return view('admin.login');
    }
}
