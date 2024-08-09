<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_registrations;
use App\Models\Users;
use App\Models\Ukms;
use Illuminate\Foundation\Auth\User;

class ValidateController extends Controller
{
    public function filterSearch(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            $query = $request->get('query');
            $filter = $request->get('filter');

            $ukm = Ukms::where('slug', $filter)->first();
            if ($query != '' && $ukm) {
                $data = Detail_registrations::where('nrp', 'like', '%' . $query . '%')->where('ukm_id', $ukm->id)->get();
            } else if ($query == '' && $ukm) {
                $data = Detail_registrations::where('ukm_id', $ukm->id)->get();
            } else if ($query != '' && !$ukm) {
                $data = Detail_registrations::where('nrp', 'like', '%' . $query . '%')->get();
            } else {
                $data = Detail_registrations::all();
            }

            foreach ($data as $row) {
                $output .= '
                    <tr class="text-nowrap text-md hover:bg-amber-100 transition">
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span id="thisRowNrp" class="font-semibold">' . $row->nrp . '</span>
                            <span>' . Users::where('nrp', $row->nrp)->first()->name  . '</span>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . Ukms::where('id', $row->ukm_id)->first()->name . '</td>
                        <td class="p-3 border-e-2 border-gray-200 text-center">
                            <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded" onclick="window.open(\'' . $row->drive_url . '\', \'_blank\')">
                                File Seleksi
                            </button>
                            <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded">
                                File Payment
                            </button>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . $row->code . '</td>
                        <td class="p-3 border-e-2 border-gray-200 font-bold text-' . ($row->file_validated == 1 ? 'green' : 'red') . '-500">' . ($row->file_validated == 1 ? 'Yes' : 'No') . '</td>
                        <td class="p-3 border-e-2 border-gray-200 font-bold text-' . ($row->payment_validated == 1 ? 'green' : 'red') . '-500">' . ($row->payment_validated == 1 ? 'Yes' : 'No') . '</td>
                        <td class="p-3 border-s-2 text-center text-nowrap">
                            <button class="validateBtn p-1.5 text-sm bg-green-500 hover:bg-green-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '">
                                Validate
                            </button>
                            <button class="rejectBtn p-1.5 text-sm bg-red-500 hover:bg-red-600 transition text-white text-nowrap rounded" data-nrp="' . $row->nrp . '">
                                Reject
                            </button>
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

    public function selectionValidate(Request $request)
    {
        $nrp = $request->get('nrp');
        $selectionFile = Detail_registrations::where('nrp', $nrp)->first()->file_validated;
        if ($selectionFile == 0) {
            Detail_registrations::where('nrp', $nrp)->update([
                'file_validated' => 1
            ]);
            return response()->json(['message' => 'true']);
        } else {
            return response()->json(['message' => 'false']);
        }
    }

    public function paymentValidate(Request $request)
    {
        $nrp = $request->get('nrp');

        if (Detail_registrations::where('nrp', $nrp)->first()->file_validated == 1) {
            $selectionFile = Detail_registrations::where('nrp', $nrp)->first()->payment_validated;
            if ($selectionFile == 0) {
                Detail_registrations::where('nrp', $nrp)->update([
                    'payment_validated' => 1
                ]);
                return response()->json(['message' => 'true']);
            } else {
                return response()->json(['message' => 'false']);
            }
        } else {
            return response()->json(['message' => 'not_yet']);
        }
    }
}
