<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
            ->join('ukms as ukm', 'dr.ukm_id', '=', 'ukm.id')
            ->where('ukm.slug', '=', $slug)
            ->select('u.name', 'u.nrp', 'u.line_id', 'u.phone')
            ->get();


        // Mengembalikan hasil dalam format JSON
        return response()->json($results);
    }
    public function validatePage()
    {
        $data['tabTitle'] = 'Participants';
        return view('admin.validate', $data);
    }

    public function generatePage()
    {
        $data['tabTitle'] = 'Generate';
        return view('admin.generate', $data);
    }

    public function leaderboardPage() {
        $data['tabTitle'] = 'Leaderboard';
        return view('admin.leaderboard', $data);
    }

    public function participant()
    {
        return view('.admin.participant');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function adminBooth()
    {
        $ukm = Ukm::all();
        $data['ukms'] = $ukm;
        $data['tabTitle'] = 'Input Admin UKM';
        return view('admin.booth-admin', $data);
    }

    public function storeAdminBooth(Request $request)
    {

        $valid = Validator::make([$request->nrp], ['nrp' => 'unique:admins,nrp'], ['nrp.unique' => 'This NRP has been registered as an admin']);
        if ($valid->fails()) {
            return redirect()->route('admin.booth-admin')->with('unique', $valid->errors()->first());
        }
        try {
            Admin::create([
                'name' => $request->name,
                'nrp' => $request->nrp,
                'ukm_id' => $request->ukm,
                'field' => 'UKM',
            ]);
            return redirect()->route('admin.booth-admin')->with('success', 'UKM Admin successfully added!');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->route('admin.booth-admin')->with('unique', 'This NRP has been registered as an admin.');
        }
    }
}
