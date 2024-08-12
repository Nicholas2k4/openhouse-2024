<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            [
                'name' => 'Perlengkapan',
                'slug' => 'perkap',
            ],
            [
                'name' => 'Information Technology',
                'slug' => 'it',
            ],
            [
                'name' => 'Sekretariat Konsumsi Kesehatan',
                'slug' => 'sekkonkes',
            ],
            [
                'name' => 'Creative',
                'slug' => 'creative',
            ],
            [
                'name' => 'Acara',
                'slug' => 'acara',
            ],
            [
                'name' => 'Badan Pengurus Harian',
                'slug' => 'bph',
            ],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
