<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\GroupchatMail;
use App\Models\Admin;
use App\Models\DetailRegistration;
use App\Models\Ukm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

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

    public function leaderboardPage()
    {
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

    public function groupchat()
    {
        $data['tabTitle'] = 'Groupchat Email';
        return view('admin.groupchat', $data);
    }

    public function sendGroupchat()
    {
        // Getting all NRP that have been registered in UKM
        $nrps = DetailRegistration::groupBy('nrp')->pluck('nrp');
        Log::info('$nrps dapet');
        $counter = 0;
        foreach ($nrps as $nrp) {
            Log::info('Lagi proses nrp ' . $nrp);
            $user_ukms = DetailRegistration::where('nrp', $nrp)
                ->where('isInvited', 0)
                ->where('payment_validated', 1)
                ->get();
            Log::info('UKM dapet');

            $user = User::where('nrp', $nrp)->first();
            $ukms = [];

            Log::info('UKM dapet lagi');
            $ukm_cnt = 0;
            foreach ($user_ukms as $i => $user_ukm) {
                $ukm_temp = Ukm::where('id', $user_ukm->ukm_id)->first();
                $ukms[$i] = $ukm_temp;
                Log::info('Mail for UKM ' . $ukm_temp->slug);
                $ukm_cnt++;
            };
            $mail = new GroupchatMail($user, $ukms);

            Log::info('Next line is dispatch');
            if ($ukm_cnt > 0) {
                dispatch(new SendMailJob($mail, $nrp));
                $counter++;
                if ($counter >= 200) {
                    break;
                }
            }
            DetailRegistration::where('nrp', $nrp)->where('payment_validated', 1)->update(['isInvited' => 1]);
        }
        return response()->json(['success' => true, 'msg' => 'Emails successfully sent!']);
    }
}
