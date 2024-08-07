<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\Ukm;
use Illuminate\Support\Str;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ukm::insert([
            [
                'id' => (string)Str::uuid(),
                'name' => 'LK BEM',
                'slug' => 'bem',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'LK MPM',
                'slug' => 'mpm',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'LK BPMF',
                'slug' => 'bpmf',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'LK PERSMA',
                'slug' => 'persma',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'LK PELMA',
                'slug' => 'pelma',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'LK TPS',
                'slug' => 'tps',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],

            [
                'id' => (string)Str::uuid(),
                'name' => 'Klub Chinese Art',
                'slug' => 'chinese',
                'current_slot' => 60,
                'max_slot' => 60,
                'regist_fee' => 250000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM ASFS',
                'slug' => 'asfs',
                'current_slot' => 80,
                'max_slot' => 80,
                'regist_fee' => 200000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Dance',
                'slug' => 'dance',
                'current_slot' => 65,
                'max_slot' => 65,
                'regist_fee' => 575000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Dekorasi',
                'slug' => 'dekor',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 380000,
            ],

            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Ilustrasi',
                'slug' => 'ilustrasi',
                'current_slot' => 45,
                'max_slot' => 45,
                'regist_fee' => 150000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Martografi',
                'slug' => 'martografi',
                'current_slot' => 100,
                'max_slot' => 100,
                'regist_fee' => 550000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Modeling',
                'slug' => 'modeling',
                'current_slot' => 40,
                'max_slot' => 40,
                'regist_fee' => 250000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Teater',
                'slug' => 'teater',
                'current_slot' => 40,
                'max_slot' => 40,
                'regist_fee' => 350000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Vocal Group',
                'slug' => 'vg',
                'current_slot' => 100,
                'max_slot' => 100,
                'regist_fee' => 450000,
            ],

            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM English Debate Society',
                'slug' => 'debate',
                'current_slot' => 60,
                'max_slot' => 60,
                'regist_fee' => 100000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Pengembangan Diri',
                'slug' => 'pd',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 420000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Esport',
                'slug' => 'esport',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Badminton',
                'slug' => 'badmin',
                'current_slot' => 190,
                'max_slot' => 190,
                'regist_fee' => 450000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Basket',
                'slug' => 'basket',
                'current_slot' => 100,
                'max_slot' => 100,
                'regist_fee' => 410000,
            ],

            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Catur',
                'slug' => 'catur',
                'current_slot' => 64,
                'max_slot' => 64,
                'regist_fee' => 65000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Futsal',
                'slug' => 'futsal',
                'current_slot' => 35,
                'max_slot' => 35,
                'regist_fee' => 310000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Renang',
                'slug' => 'renang',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 350000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Taekwondo',
                'slug' => 'taekwondo',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 150000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Tenis Lapangan',
                'slug' => 'tenis-lapangan',
                'current_slot' => 34,
                'max_slot' => 34,
                'regist_fee' => 255000,
            ],

            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Tenis Meja',
                'slug' => 'tenis-meja',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 250000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Voli',
                'slug' => 'voli',
                'current_slot' => 45,
                'max_slot' => 45,
                'regist_fee' => 250000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Matrapenza',
                'slug' => 'mpz',
                'current_slot' => 150,
                'max_slot' => 150,
                'regist_fee' => 200000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM EMR',
                'slug' => 'emr',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 180000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Menwa',
                'slug' => 'menwa',
                'current_slot' => 15,
                'max_slot' => 15,
                'regist_fee' => 0,
            ],

            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Matrapala',
                'slug' => 'matrapala',
                'current_slot' => 50,
                'max_slot' => 50,
                'regist_fee' => 299000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Paduan Suara',
                'slug' => 'padus',
                'current_slot' => 80,
                'max_slot' => 80,
                'regist_fee' => 400000,
            ],
            [
                'id' => (string)Str::uuid(),
                'name' => 'UKM Orkestra',
                'slug' => 'orkestra',
                'current_slot' => 10000,
                'max_slot' => 10000,
                'regist_fee' => 0,
            ],
        ]);
    }
}
