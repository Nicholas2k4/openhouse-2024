<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            $nrp = auth()->user()->nrp;
        } else {
            $nrp = 0;
        }
        $letters = DB::table('detail_games')->where('nrp', $nrp)->pluck('letter');

        $data['letters'] = $letters;
        $data['title'] = 'Game';

        return view('user.game', $data);
    }
}
