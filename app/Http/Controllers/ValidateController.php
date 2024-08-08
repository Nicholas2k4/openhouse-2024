<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_registrations;
use App\Models\Users;
use App\Models\Ukms;
use Illuminate\Foundation\Auth\User;

class ValidateController extends Controller
{
    public function liveSearch(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            $query = $request->get('query');

            if ($query != '') {
                $data = Detail_registrations::where('nrp', 'like', '%' . $query . '%')->get();
            } else {
                $data = Detail_registrations::all();
            }

            foreach ($data as $row) {
                $output .= '
                    <tr class="text-nowrap text-md hover:bg-amber-100 transition">
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span class="font-semibold">' . $row->nrp . '</span>
                            <span>' . Users::where('nrp', $row->nrp)->first()->name  . '</span>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . Ukms::where('id', $row->ukm_id)->first()->name . '</td>
                        <td class="p-3 border-e-2 border-gray-200 text-center">
                            <a href="' . $row->drive_url . '">
                                <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded">
                                    File Seleksi
                                </button>
                            </a>
                            <a href="">
                                <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded">
                                    File Payment
                                </button>
                            </a>
                        </td>
                        <td class="p-3 border-e-2 border-gray-200">' . $row->code . '</td>
                        <td class="p-3 border-e-2 border-gray-200 font-bold text-green-500">' . ($row->file_validated == 1 ? 'Yes' : 'No') . '</td>
                        <td class="p-3 border-e-2 border-gray-200 font-bold text-red-500">' . ($row->payment_validated == 1 ? 'Yes' : 'No') . '</td>
                        <td class="p-3 border-s-2 text-center text-nowrap">
                            <a href="">
                                <button class="p-1.5 text-sm bg-green-500 hover:bg-green-600 transition text-white text-nowrap rounded">
                                    Validate
                                </button>
                            </a>
                            <a href="">
                                <button class="p-1.5 text-sm bg-red-500 hover:bg-red-600 transition text-white text-nowrap rounded">
                                    Reject
                                </button>
                            </a>
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
}
