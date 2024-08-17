<?php

namespace App\Http\Controllers;

use App\Mail\MailValidation;
use App\Mail\PaymentMail;
use Illuminate\Http\Request;
use App\Models\DetailRegistration;
use App\Models\User;
use App\Models\Ukm;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ValidateController extends Controller
{
    public function filterSearch(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            $nrp = $request->get('nrp');
            $filter = $request->get('filter');
            $status = $request->get('status');

            $ukm = Ukm::where('slug', $filter)->first();
            if ($status == 'rejected') {
                $status = 2;
            } else if ($status == 'accepted') {
                $status = 1;
            } else if ($status == 'pending') {
                $status = 0;
            } else {
                $status = 3;
            }

            if ($nrp != '' && $ukm) { // NRP not empty & UKM not empty
                if ($status == 2) { // Rejected
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->where('file_validated', $status)->get();
                } else if ($status == 1) { // Accepted
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->where('file_validated', $status)->where('payment_validated', $status)->get();
                } else if ($status == 0) {  //Pending
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->where(function ($query) {
                        $query->where('file_validated', 0)
                            ->orWhere('payment_validated', 0);
                    })->get();
                } else { // All
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->get();
                }
            } else if ($nrp == '' && $ukm) { // NRP empty & UKM not empty
                if ($status == 2) { // Rejected
                    $data = DetailRegistration::where('ukm_id', $ukm->id)->where('file_validated', $status)->get();
                } else if ($status == 1) { // Accepted
                    $data = DetailRegistration::where('ukm_id', $ukm->id)->where('file_validated', $status)->where('payment_validated', $status)->get();
                } else if ($status == 0) { // Pending
                    $data = DetailRegistration::where('ukm_id', $ukm->id)->where(function ($query) {
                        $query->where('file_validated', 0)
                            ->orWhere('payment_validated', 0);
                    })->get();
                } else { // All
                    $data = DetailRegistration::where('ukm_id', $ukm->id)->get();
                }
            } else if ($nrp != '' && !$ukm) { // NRP not empty & UKM empty
                if ($status == 2) { // Rejected
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where('file_validated', $status)->get();
                } else if ($status == 1) { // Accepted
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where('file_validated', $status)->where('payment_validated', $status)->get();
                } else if ($status == 0) { // Pending
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->where(function ($query) {
                        $query->where('file_validated', 0)
                            ->orWhere('payment_validated', 0);
                    })->get();
                } else { // All
                    $data = DetailRegistration::where('nrp', 'like', '%' . $nrp . '%')->get();
                }
            } else if ($nrp == '' && !$ukm) { // NRP empty & UKM empty
                if ($status == 2) { // Rejected
                    $data = DetailRegistration::where('file_validated', $status)->get();
                } else if ($status == 1) { // Accepted
                    $data = DetailRegistration::where('file_validated', $status)->where('payment_validated', $status)->get();
                } else if ($status == 0) { // Pending
                    $data = DetailRegistration::where(function ($query) {
                        $query->where('file_validated', 0)
                            ->orWhere('payment_validated', 0);
                    })->where('file_validated', 1)->get();
                } else { // All
                    $data = DetailRegistration::all();
                }
            }

            foreach ($data as $row) {
                if (!$row->drive_url) {
                    $output .= '
                    <tr class="text-nowrap text-md hover:bg-amber-100 transition">
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span id="thisRowNrp" class="font-semibold">' . $row->nrp . '</span>
                            <span>' . User::where('nrp', $row->nrp)->first()->name  . '</span>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . Ukm::where('id', $row->ukm_id)->first()->name . '</td>
                        <td class="p-3 border-e-2 border-gray-200 text-center">
                            <button class="hidden p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded" onclick="window.open(\'' . $row->drive_url . '\', \'_blank\')">
                                File Seleksi
                            </button>
                            <button class="viewPayment p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '" data-ukm="' . $row->ukm_id . '">
                                File Payment
                            </button>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span>' . User::where('nrp', $row->nrp)->first()->line_id . '</span>
                            <span>' . User::where('nrp', $row->nrp)->first()->phone  . '</span>
                        </td>';
                } else {
                    $output .= '
                    <tr class="text-nowrap text-md hover:bg-amber-100 transition">
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span id="thisRowNrp" class="font-semibold">' . $row->nrp . '</span>
                            <span>' . User::where('nrp', $row->nrp)->first()->name  . '</span>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . Ukm::where('id', $row->ukm_id)->first()->name . '</td>
                        <td class="p-3 border-e-2 border-gray-200 text-center">
                            <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded" onclick="window.open(\'' . $row->drive_url . '\', \'_blank\')">
                                File Seleksi
                            </button>
                            <button class="viewPayment p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '" data-ukm="' . $row->ukm_id . '">
                                File Payment
                            </button>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span>' . User::where('nrp', $row->nrp)->first()->line_id . '</span>
                            <span>' . User::where('nrp', $row->nrp)->first()->phone  . '</span>
                        </td>';
                }


                if ($row->file_validated == 2 || $row->payment_validated == 2) {
                    $output .= '
                        <td class="p-3 border-y-2 border-gray-200 font-bold text-yellow-500 text-center" colspan="3">Rejected</td>';
                } else if ($row->file_validated == 1 && $row->payment_validated == 1) {
                    $output .= '
                        <td class="p-3 border-gray-200 font-bold text-green-500 text-center" colspan="3">Accepted</td>
                    ';
                } else {
                    $output .= '
                        <td class="p-3 border-e-2 border-gray-200 font-bold text-' . ($row->file_validated == 1 ? 'green' : ($row->file_validated == 2 ? 'yellow' : 'red')) . '-500">' . ($row->file_validated == 1 ? 'Yes' : ($row->file_validated == 2 ? 'Rejected' : 'No')) . '</td>
                        <td class="p-3 border-e-2 border-gray-200 font-bold text-' . ($row->payment_validated == 1 ? 'green' : ($row->file_validated == 2 ? 'yellow' : 'red')) . '-500">' . ($row->payment_validated == 1 ? 'Yes' : ($row->file_validated == 2 ? 'Rejected' : 'No')) . '</td>
                        <td class="p-3 border-s-2 text-center text-nowrap">';
                }

                if ($row->file_validated != 2) {
                    $output .= '
                            <button class="validateBtn p-1.5 text-sm bg-green-500 hover:bg-green-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '" data-ukm="' . $row->ukm_id . '">
                                Validate
                            </button>
                            <button class="rejectBtn p-1.5 text-sm bg-red-500 hover:bg-red-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '" data-ukm="' . $row->ukm_id . '">
                                Reject
                            </button>
                            ';
                }

                $output .= '
                    </td>
                </tr>
                ';
            }

            if ($output == '') {
                $output = '
                    <tr>
                        <td class="p-4 text-center" colspan="8">No Data Found</td>
                    </tr>
                ';
            }

            $dataCount = count($data);
            if ($filter == '') {
                return response()->json(['registrations' => $output, 'dataCount' => $dataCount, 'ukmName' => 'All']);
            } else {
                return response()->json(['registrations' => $output, 'dataCount' => $dataCount, 'ukmName' => $ukm->name]);
            }
        }
    }

    public function viewPayment(Request $request)
    {
        $nrp = $request->get('nrp');
        $ukm = $request->get('ukm');
        $file_path = DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->first()->payment;

        return response()->json(['file_path' => $file_path]);
    }

    public function selectionValidate(Request $request)
    {
        $nrp = $request->get('nrp');
        $ukm = $request->get('ukm');
        $admin_ukm_name = Ukm::where('id', session('ukm_id'))->first()->name;

        $selectionFile = DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->first()->file_validated;
        if ($selectionFile == 0) {
            $user = User::where('nrp', $nrp)->first();
            $data_ukm = Ukm::where('id', $ukm)->first();
            Mail::to($nrp . '@john.petra.ac.id')->send(new PaymentMail($user, $data_ukm, 'accepted', 'file'));
            DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->update([
                'file_validated' => 1,
            ]);

            Log::channel('daily')->info(session('nrp')  . '-' . session('name') . '-' . $admin_ukm_name .
                ', has accepted selection file of ' . $user->nrp . '-' . $user->name . '-' . $data_ukm->name);
            return response()->json(['message' => 'true']); // Berhasil validasi
        } else if ($selectionFile == 1) {
            return response()->json(['message' => 'false']); // File seleksi sudah divalidasi
        } else {
            return response()->json(['message' => 'warning']); // Rejected
        }
    }

    public function paymentValidate(Request $request)
    {
        $nrp = $request->get('nrp');
        $ukm = $request->get('ukm');
        $admin_ukm_name = Ukm::where('id', session('ukm_id'))->first()->name;

        if (DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->first()->file_validated == 1) {
            $selectionFile = DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->first()->payment_validated;
            if ($selectionFile == 0) {

                $user = User::where('nrp', $nrp)->first();
                $data_ukm = Ukm::where('id', $ukm)->first();
                Mail::to($nrp . '@john.petra.ac.id')->send(new PaymentMail($user, $data_ukm, 'accepted', 'payment'));

                DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->update([
                    'payment_validated' => 1,
                ]);
                Log::channel('daily')->info(session('nrp')  . '-' . session('name') . '-' . $admin_ukm_name .
                    ', has accepted payment file of ' . $user->nrp . '-' . $user->name . '-' . $data_ukm->name);
                return response()->json(['message' => 'true']); // Berhasil validasi
            } else {
                return response()->json(['message' => 'false']); // Payment sudah divalidasi
            }
        } else if (DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->first()->file_validated == 2) {
            return response()->json(['message' => 'warning']); // Rejected
        } else {
            return response()->json(['message' => 'not_yet']); // File seleksi belum divalidasi
        }
    }

    public function rejectPayment(Request $request)
    {
        $nrp = $request->get('nrp');
        $ukm = $request->get('ukm');
        $admin_ukm_name = Ukm::where('id', session('ukm_id'))->first()->name;

        $user = User::where('nrp', $nrp)->first();
        // return response()->json(['message' => $user->name]);
        $data_ukm = Ukm::where('id', $ukm)->first();
        Mail::to($nrp . '@john.petra.ac.id')->send(new PaymentMail($user, $data_ukm, 'rejected', 'payment'));

        Log::channel('daily')->info(session('nrp')  . '-' . session('name') . '-' . $admin_ukm_name .
            ', has rejected payment file of ' . $user->nrp . '-' . $user->name . '-' . $data_ukm->name);
        Ukm::where('id', $ukm)->increment('current_slot'); // kalau ditolak, slot nambah 1
        DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->update([
            'payment_validated' => 2,
        ]);
        return response()->json(['message' => 'true']);
    }

    public function rejectFile(Request $request)
    {
        $nrp = $request->get('nrp');
        $ukm = $request->get('ukm');
        $admin_ukm_name = Ukm::where('id', session('ukm_id'))->first()->name;

        Ukm::where('id', $ukm)->increment('current_slot'); // kalau ditolak, slot nambah 1
        $user = User::where('nrp', $nrp)->first();
        $data_ukm = Ukm::where('id', $ukm)->first();
        Mail::to($nrp . '@john.petra.ac.id')->send(new PaymentMail($user, $data_ukm, 'rejected', 'file'));
        DetailRegistration::where('nrp', $nrp)->where('ukm_id', $ukm)->update([
            'file_validated' => 2,
        ]);
        Log::channel('daily')->info(session('nrp')  . '-' . session('name') . '-' . $admin_ukm_name .
            ', has rejected selection file of ' . $user->nrp . '-' . $user->name . '-' . $data_ukm->name);
        return response()->json(['message' => 'true']);
    }
}
