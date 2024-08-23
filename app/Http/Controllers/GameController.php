<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        // if (auth()->user()) {
        //     $nrp = auth()->user()->nrp;
        // } else {
        //     $nrp = 0;
        // }

        if (session()->has('nrp')) {
            $nrp = session('nrp');
        } else {
            $nrp = 0;
        }

        // DAY 1 - Be ready to welcome the new dawn!
        // $daySentence = "Be ready to welcome the new dawn!";
        // $daySentence = "Be ready to welcome the new dawn!";

        // DAY 2 - The coming of brighter tomorrow
        $daySentence = "The coming of brighter tomorrow";

        // DAY 3 - For he is risen so we are destined
        // $daySentence = "For he is risen so we are destined"

        $letters = DB::table('detail_games')->where('nrp', $nrp)->where('created_at', '>', '2024-08-22 10:00:00')->pluck('letter', 'letter_index');
        $letters = $letters->toArray();

        $daySentenceNoSpaces = str_replace(' ', '', $daySentence);
        $userSentence = '';
        foreach (str_split($daySentenceNoSpaces) as $index => $dayLetter) {
            if (array_key_exists($index, $letters)) {
                $userSentence .= $dayLetter;
            } else {
                $userSentence .= ' ';
            }
        }

        $data['letters'] = $letters;
        $data['title'] = 'Game';
        $data['daySentence'] = $daySentence;
        $data['userSentence'] = $userSentence;
        $data['ukms'] = UKMController::getUkms();

        return view('user.game', $data);
    }
}
