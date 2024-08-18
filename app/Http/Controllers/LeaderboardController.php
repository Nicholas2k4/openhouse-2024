<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailGame;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function fetchLeaderboard(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            // Fetching leaderboard data
            $data = DetailGame::select('nrp', DB::raw('COUNT(*) as score'))
                ->groupBy('nrp')
                ->orderBy('score', 'desc')
                ->get();

            // Fetch User in a single query
            $userDetails = User::whereIn('nrp', $data->pluck('nrp'))->get()->keyBy('nrp');

            foreach ($data as $row) {
                $user = $userDetails->get($row->nrp);

                if ($user) {
                    $output .= '
                    <tr class="text-nowrap text-md hover:bg-amber-100 transition">
                        <td class="p-3 border-e-2 border-gray-200 flex flex-col">
                            <span id="thisRowNrp" class="font-semibold">' . $row->nrp . '</span>
                            <span>' . $user->name . '</span>
                        </td>';

                    if ($user->line_id == null || $user->phone == null) {
                        $output .=
                            '<td class="p-3 border-e-2 border-gray-200">-</td>
                            <td class="p-3 border-e-2 border-gray-200">-</td>';
                    } else {
                        $output .=
                            '<td class="p-3 border-e-2 border-gray-200">' . $user->line_id . '</td>
                            <td class="p-3 border-e-2 border-gray-200">' . $user->phone . '</td>';
                    }

                    $output .=
                        '<td class="p-3 border-e-2 border-gray-200">' . $row->score . '</td>
                    </tr>';
                }
            }

            return response()->json(['allRanks' => $output, 'dataCount' => $data->count()]);
        }
    }
}
