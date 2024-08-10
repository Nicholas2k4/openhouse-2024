<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];

        for ($i = 0; $i < 50; $i++) {
            if ($i < 10) {
                $users[] = [
                    'id' => (string)Str::uuid(),
                    'name' => 'User ' . $i,
                    'nrp' => 'C1422000' . $i,
                    'line_id' => 'user_line_id' . $i,
                    'phone' => '08123456789',
                ];
            } else {
                $users[] = [
                    'id' => (string)Str::uuid(),
                    'name' => 'User ' . $i,
                    'nrp' => 'C142200' . $i,
                    'line_id' => 'user_line_id' . $i,
                    'phone' => '08123456789',
                ];
            }
        }

        Users::insert($users);
    }
}
