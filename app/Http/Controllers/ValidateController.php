<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailRegistration;
use App\Models\User;
use App\Models\Ukm;

class ValidateController extends Controller
{
    public function filterSearch(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            $nrp = $request->get('nrp');
            $filter = $request->get('filter');
            $status = $request->get('status');

            $ukm = Ukms::where('slug', $filter)->first();
            if ($status == 'rejected') {
                $status = 2;
            } else if ($status == 'accepted') {
                $status = 1;
            } else {
                $status = 0;
            }

            if ($nrp != '' && $ukm) { // NRP not empty & UKM not empty
                if ($status == 2) {
                    $data = Detail_registrations::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->where('file_validated', $status)->get();
                } else if ($status == 1) {
                    $data = Detail_registrations::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->where('file_validated', $status)->where('payment_validated', $status)->get();
                } else {
                    $data = Detail_registrations::where('nrp', 'like', '%' . $nrp . '%')->where('ukm_id', $ukm->id)->where('file_validated', '!=', 2)->where('payment_validated', '0')->get();
                }
            } else if ($nrp == '' && $ukm) { // NRP empty & UKM not empty
                if ($status == 2) {
                    $data = Detail_registrations::where('ukm_id', $ukm->id)->where('file_validated', $status)->get();
                } else if ($status == 1) {
                    $data = Detail_registrations::where('ukm_id', $ukm->id)->where('file_validated', $status)->where('payment_validated', $status)->get();
                } else {
                    $data = Detail_registrations::where('ukm_id', $ukm->id)->where('file_validated', '!=', 2)->where('payment_validated', '0')->get();
                }
            } else if ($nrp != '' && !$ukm) { // NRP not empty & UKM empty
                if ($status == 2) {
                    $data = Detail_registrations::where('nrp', 'like', '%' . $nrp . '%')->where('file_validated', $status)->get();
                } else if ($status == 1) {
                    $data = Detail_registrations::where('nrp', 'like', '%' . $nrp . '%')->where('file_validated', $status)->where('payment_validated', $status)->get();
                } else {
                    $data = Detail_registrations::where('nrp', 'like', '%' . $nrp . '%')->where('file_validated', '!=', 2)->where('payment_validated', '0')->get();
                }
            } else if ($nrp == '' && !$ukm) { // NRP empty & UKM empty
                if ($status == 2) {
                    $data = Detail_registrations::where('file_validated', $status)->get();
                } else if ($status == 1) {
                    $data = Detail_registrations::where('file_validated', $status)->where('payment_validated', $status)->get();
                } else {
                    $data = Detail_registrations::where('file_validated', '!=', 2)->where('payment_validated', '0')->get();
                }
            }

            foreach ($data as $row) {
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
                            <button class="viewPayment p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '">
                                File Payment
                            </button>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . $row->code . '</td>';

                if ($row->file_validated == 2) {
                    $output .= '
                        <td class="p-3 border-gray-200 font-bold text-yellow-500 text-center" colspan="3">Rejected</td>';
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

                if ($row->file_validated == 2) {
                    $output .= '<p class="p-3 border-gray-200 font-bold text-yellow-500">Rejected</p>';
                } else {
                    $output .= '
                            <button class="validateBtn p-1.5 text-sm bg-green-500 hover:bg-green-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '">
                                Validate
                            </button>
                            <button class="rejectBtn p-1.5 text-sm bg-red-500 hover:bg-red-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '">
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

            return response()->json(['registrations' => $output]);
        }
    }

    public function viewPayment(Request $request)
    {
        $nrp = $request->get('nrp');
        $file_path = Detail_registrations::where('nrp', $nrp)->first()->payment;

        return response()->json(['file_path' => $file_path]);
    }

    public function selectionValidate(Request $request)
    {
        $nrp = $request->get('nrp');
        $selectionFile = DetailRegistration::where('nrp', $nrp)->first()->file_validated;
        if ($selectionFile == 0) {
            DetailRegistration::where('nrp', $nrp)->update([
                'file_validated' => 1
            ]);
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

        if (DetailRegistration::where('nrp', $nrp)->first()->file_validated == 1) {
            $selectionFile = DetailRegistration::where('nrp', $nrp)->first()->payment_validated;
            if ($selectionFile == 0) {
                DetailRegistration::where('nrp', $nrp)->update([
                    'payment_validated' => 1
                ]);
                return response()->json(['message' => 'true']); // Berhasil validasi
            } else {
                return response()->json(['message' => 'false']); // Payment sudah divalidasi
            }
        } else if (Detail_registrations::where('nrp', $nrp)->first()->file_validated == 2) {
            return response()->json(['message' => 'warning']); // Rejected
        } else {
            return response()->json(['message' => 'not_yet']); // File seleksi belum divalidasi
        }
    }

    public function rejectParticipant(Request $request) {
        $nrp = $request->get('nrp');

        // Ukms::where('nrp', $nrp)->increment('current_slot'); // kalau ditolak, slot nambah 1
        Detail_registrations::where('nrp', $nrp)->update([
            'file_validated' => 2
        ]);

        return response()->json(['message' => 'true']);
    }
}
