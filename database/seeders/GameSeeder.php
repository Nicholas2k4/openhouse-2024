<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Ukm;
use App\Models\DetailGame;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummy_games_data = [];
        $letters = ["B", "e", "r", "e", "a", "d", "y", "t", "o", "w", "e", "l", "c", "o", "m", "e", "t", "h", "e", "n", "e", "w", "d", "a", "w", "n", "!"];

        for ($i = 0; $i < 100; $i++) {
            $random = random_int(0, count($letters) - 1);
            $dummy_games_data[] = [
                'id' => (string)Str::uuid(),
                'nrp' => User::all()->random()->nrp,
                'ukm_id' => Ukm::all()->random()->id,
                'letter' => $letters[$random],
                'letter_index' => $random,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DetailGame::insert($dummy_games_data);
    }
}
