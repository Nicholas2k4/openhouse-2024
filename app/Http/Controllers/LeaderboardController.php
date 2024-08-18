<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailGame;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function fetchLeaderBoard(Request $request) {
        $output = '';
        if ($request->ajax()) {
            $data = DetailGame::select('nrp', DB::raw('COUNT(*) as score'))->groupBy('nrp')->orderBy('score', 'desc')->get();

            foreach ($data as $row) {
                $output .= '
                <tr class="text-nowrap text-md hover:bg-amber-100 transition">
                    <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                        <span id="thisRowNrp" class="font-semibold">' . $row->nrp . '</span>
                        <span>' . User::where('nrp', $row->nrp)->first()->name  . '</span>
                    </td>
                    <td class="p-3 border-e-2 border-gray-200">' . User::where('nrp', $row->nrp)->first()->line_id . '</td>
                    <td class="p-3 border-e-2 border-gray-200">' . User::where('nrp', $row->nrp)->first()->phone . '</td>
                    <td class="p-3 border-e-2 border-gray-200">' . $row->score . '</td>
                </tr>';
            }

            return response()->json(['allRanks' => $output, 'dataCount' => $data->count()]);
        }
    }
}
