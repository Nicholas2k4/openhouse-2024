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


        // DAY 1 - Be ready to welcome the new dawn!
        $day1Sentence = "Be ready to welcome the new dawn!";



        // DAY 2 - The coming of brighter tomorrow
        // $day2Sentence = "The coming of brighter tomorrow"

        // DAY 3 - For he is risen so we are destined
        // $day3Sentence = "For he is risen so we are destined"

        $letters = DB::table('detail_games')->where('nrp', $nrp)->pluck('letter', 'letter_index');
        $letters = $letters ->toArray();

        $day1SentenceNoSpaces = str_replace(' ', '', $day1Sentence);
        $userSentence = '';
        foreach (str_split($day1SentenceNoSpaces) as $index => $day1Letter) {
            if (array_key_exists($index, $letters)) {
                $userSentence .= $day1Letter;
            } else {
                $userSentence .= ' ';
            }
        }

        $data['letters'] = $letters;
        $data['title'] = 'Game';
        $data['day1Sentence'] = $day1Sentence;
        $data['userSentence'] = $userSentence;
        $data['ukms'] = UKMController::getUkms();

        return view('user.game', $data);
    }
}
