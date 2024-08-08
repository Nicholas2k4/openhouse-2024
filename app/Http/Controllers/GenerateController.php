<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_games;

class GenerateController extends Controller
{
    public function giveLetter(Request $request)
    {
        // DAY 1 - Be ready to welcome the new dawn!
        $letters = ["B", "e", "r", "e", "a", "d", "y", "t", "o", "w", "e", "l", "c", "o", "m", "e", "t", "h", "e", "n", "e", "w", "d", "a", "w", "n", "!"];

        // DAY 2 - The coming of brighter tomorrow
        // $letters = ["T", "h", "e", "c", "o", "m", "i", "n", "g", "o", "f", "b", "r", "i", "g", "h", "t", "e", "r", "t", "o", "m", "o", "r", "r", "o", "w"];

        // DAY 3 - For he is risen so we are destined
        // $letters = ["F", "o", "r", "h", "e", "i", "s", "r", "i", "s", "e", "n", "s", "o", "w", "e", "a", "r", "e", "d", "i", "n", "s", "t", "e", "d"];

        try {
            $request->validate([
                'nrp' => ['required', 'min:9', 'max:9']
            ]);
        } catch (\Exception $e) {
            return redirect()->route('admin.generate')->with(['error' => 'NRP format is not valid']);
        }

        // get NRP maba
        $nrp = $request->nrp;

        // cek apakah admin booth ukm sudah generate untuk maba
        // contoh : admin booth ukm basket sudah generate untuk maba C14220004 atau belum, jika sudah maka tidak boleh memberikan letter lagi
        if (Detail_games::whereRaw('LOWER(nrp) = ?', strtolower($nrp))->where('ukm_id', session()->get('ukm_id'))->exists()) {
            return redirect()->route('admin.generate')->with(['error' => 'This participant already has a letter from this UKM admin']);
        }

        // variable untuk simpan letter, awal null dulu
        $letter = null;

        // random interger 0 - 26
        $random_index = rand(0, count($letters) - 1);

        // loop pencarian apakah maba sudah punya letter nya atau belum, kalau sudah punya akan dirandom lagi
        while (Detail_games::whereRaw('LOWER(nrp) = ?', strtolower($nrp))->where('letter_index', $random_index)->exists()) {
            $random_index = rand(0, count($letters) - 1);
            $letter = $letters[$random_index];
        }

        // kalau belum ada letter, digenerate baru
        if ($letter == null) {
            $letter = $letters[$random_index];
        }

        Detail_games::create([
            'ukm_id' => session()->get('ukm_id'),
            'nrp' => $nrp,
            'letter' => $letter,
            'letter_index' => $random_index
        ]);

        return redirect()->route('admin.generate')->with(['success' => 'Letter has been generated to ' . $nrp]);
    }
}
