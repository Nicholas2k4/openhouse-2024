<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DetailRegistration;
use App\Models\Ukm;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function payment(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'ukm_id' => 'required',
            'payment' => 'required|file|mimes:jpeg,png,jpg,heic|max:5120',
        ], [
            'ukm_id.required' => 'UKM ID is required.',
            'payment.required' => 'Payment file is required.',
            'payment.mimes' => 'The payment file must be a file of type: jpeg, png, jpg, heic.',
            'payment.max' => 'The payment file may not be greater than 5 MB.',
        ]);

        $nrp = session('nrp');
        $ukm_id = $request->ukm_id;

        // Find the user and their registration details
        $user = User::where('nrp', $nrp)->first();
        $detail_registration = DetailRegistration::where('nrp', $user->nrp)
            ->where('ukm_id', $ukm_id)
            ->first();
        $ukm = Ukm::where('id', $ukm_id)->first();
        $ukm_name = $ukm->name;

        if ($detail_registration) {
            // Check if a file was uploaded
            if ($request->hasFile('payment')) {
                // Get the uploaded file
                $file = $request->file('payment');

                // Get the UKM name based on the UKM ID
                $ukm_name = Ukm::where('id', $ukm_id)->value('name');

                // Format the current date and time
                $current_date_time = now()->setTimezone('Asia/Jakarta')->format('d-m-y_H-i-s');

                // Create a new file name
                $filename = $nrp . '_' . $current_date_time . '.' . $file->getClientOriginalExtension();

                // Define the file path
                $file_path = 'uploads/' . $ukm_name . '/' . $filename;

                // Store the file with the new path and name
                $file->storeAs('uploads/' . $ukm_name, $filename, 'public');

                // Update the detail_registration record with the file path
                $detail_registration->update([
                    'payment' => $file_path,
                ]);

                return back()->with('success', 'Pembayaran berhasil diunggah');
            } else {
                return back()->with('error', 'File pembayaran tidak ditemukan');
            }
        } else {
            return back()->with('error', 'Pendaftaran tidak ditemukan');
        }
    }

    //dummy cuma buat test
    public function dummy()
    {
        return view('user.dummy');
    }

    public function redirect($slug)
    {
        $name = session('name');
        $nrp = session('nrp');
        $email = session('email');

        if (!$name || !$nrp || !$email) {
            return view('user.login');
        }

        $list_lk = ['bem', 'tps', 'mpm', 'bpmf', 'persma', 'pelma'];
        if (in_array($slug, $list_lk)) {
            return redirect()->route('user.home');
        }

        // restriction 3 ukm
        $ukm_slug = $slug;

        if($ukm_slug == 'orkestra' || $ukm_slug == 'padus'){
            return redirect()->route('user.home')->with('closed', 'closed');
        }

        $count = DetailRegistration::where('nrp', $nrp)->count();
        $ukm = Ukm::where('slug', $ukm_slug)->first();
        $detail_registration = DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm->id)->first();
        if ($count >= 3 && !$detail_registration) {
            back()->with('limit', 'Maksimal mendaftar 3 UKM');
        }

        // logic redirect audisi / pembayaran & slot
        $ukm = Ukm::where('slug', $ukm_slug)->first();
        $ukm_id = $ukm->id;
        $ukm_name = $ukm->name;
        $user = User::where('nrp', $nrp)->first();
        if ($user) {
            $detail_registration = DetailRegistration::where('nrp', $user->nrp)->where('ukm_id', $ukm->id)->first();
        } else {
            $detail_registration = null;
        }

        if (!$detail_registration) { //kalau belum ada record
            return view('user.pendaftaran', array_merge(compact('name', 'nrp', 'email', 'ukm_id', 'ukm_slug', 'ukm_name'), [
                'title' => 'Pendaftaran'
            ]));
        } else { //udah memasukan data diri
            if ($ukm_slug == 'vg' || $ukm_slug == 'ilustrasi') {
                if ($detail_registration->file_validated == 0 || $detail_registration->file_validated == 2) { //vg / ilus & belum diterima
                    $status_file = $detail_registration->file_validated;
                    return view('user.wait', compact('name', 'nrp', 'email', 'ukm_slug', 'status_file'));
                } else { // vg / ilus & sudah diterima
                    $code = $detail_registration->code;
                    $status_pembayaran = $detail_registration->payment_validated;
                    $url = $detail_registration->payment;
                    $ukm_name = $ukm->name;
                    $price = $ukm->regist_fee;
                    return view('user.pembayaran', compact('name', 'nrp', 'email', 'code', 'ukm_id', 'status_pembayaran', 'url', 'ukm_name', 'price'));
                }
            } else { //udah memasukan data diri & bukan dari vg / ilus
                $code = $detail_registration->code;
                $status_pembayaran = $detail_registration->payment_validated;
                $url = $detail_registration->payment;
                $ukm_name = $ukm->name;
                $price = $ukm->regist_fee;
                return view('user.pembayaran', compact('name', 'nrp', 'email', 'code', 'ukm_id', 'status_pembayaran', 'url', 'ukm_name', 'price'));
            }
        }

        return view('user.pendaftaran', compact('name', 'nrp', 'email'));
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
        if ($current_slot < 1) {
            return back()->with('warning', 'slot habis');
        } else {
            $current_slot = $current_slot - 1;
        }

        if ($user) {
            $user->timestamps = false;
            // Update id_line pada user
            $user->update(['line_id' => $request->line_id]);
            $user->update(['phone' => $request->line_id]);

            // update ukm slot
            $ukm->update(['current_slot' => $current_slot]);

            if ($ukm->slug == 'vg' || $ukm->slug == 'ilustrasi') {
                $file_validated = 0;
            } else {
                $file_validated = 1;
            }

            // untuk ukm yang free
            if ($ukm->slug == 'esport' || $ukm->slug == 'orkestra' || $ukm->slug == 'menwa') {
                $payment_validated = 1;
            } else {
                $payment_validated = 0;
            }
            // cek udah ada record dengan nrp + id ukm yang sama atau belom
            $duplicate = DetailRegistration::where('nrp', $user->nrp)->where('ukm_id', $ukm->id)->first();
            if ($duplicate){
                return back()->with('info', 'Sudah pernah daftar');
            }
            // Simpan data ke tabel detail_registration
            DetailRegistration::create([
                'nrp' => $user->nrp,
                'ukm_id' => $ukm->id,
                'payment' => null,
                'code' => Str::random(4), // Menghasilkan string acak 4 karakter,
                'drive_url' => $request->drive_url,
                'file_validated' => $file_validated,
                'payment_validated' => $payment_validated,
            ]);

            return back()->with('info', 'Pendaftaran berhasil');
        } else {
            User::create([
                'name' => $request->name,
                'nrp' => $request->nrp,
                'line_id' => $request->line_id,
                'phone' => $request->phone,
            ]);

            if ($ukm->slug == 'vg' || $ukm->slug == 'ilustrasi') {
                $file_validated = 0;
            } else {
                $file_validated = 1;
            }

            // untuk ukm yang free
            if ($ukm->slug == 'esport' || $ukm->slug == 'orkestra' || $ukm->slug == 'menwa') {
                $payment_validated = 1;
            } else {
                $payment_validated = 0;
            }
            $user = User::where('nrp', $request->nrp)->first();
            
            // cek udah ada record dengan nrp + id ukm yang sama atau belom
            $duplicate = DetailRegistration::where('nrp', $user->nrp)->where('ukm_id', $ukm->id)->first();
            if ($duplicate){
                return back()->with('info', 'Sudah pernah daftar');
            }
            DetailRegistration::create([
                'nrp' => $user->nrp,
                'ukm_id' => $ukm->id,
                'payment' => null,
                'code' => Str::random(4), // Menghasilkan string acak 4 karakter,
                'drive_url' => $request->drive_url,
                'file_validated' => $file_validated,
                'payment_validated' => $payment_validated,
            ]);

            $ukm->update(['current_slot' => $current_slot]);
            return back()->with('info', 'Pendaftaran berhasil');
        }
    }
}
