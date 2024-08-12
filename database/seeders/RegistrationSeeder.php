<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\DetailRegistration;
use App\Models\Ukm;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_registrations = [];

        for ($i = 0; $i < 50; $i++) {
            $random_ukm = Ukm::all()->random();
            if ($i < 10) {
                $detail_registrations[] = [
                    'id' => (string)Str::uuid(),
                    'nrp' => 'C1422000' . $i,
                    'ukm_id' => $random_ukm->id,
                    'payment' => $random_ukm->payment,
                    'code' => 'ABC123',
                    'drive_url' => 'https://drive.google.com/drive/folders/1A6cQZlPTy5Xtc8IrlKcnwelcyuyhroiS?usp=sharing',
                    'file_validated' => rand(0, 2),
                    'payment_validated' => 0,
                ];
            } else {
                $detail_registrations[] = [
                    'id' => (string)Str::uuid(),
                    'nrp' => 'C142200' . $i,
                    'ukm_id' => $random_ukm->id,
                    'payment' => $random_ukm->payment,
                    'code' => 'ABC123',
                    'drive_url' => 'https://drive.google.com/drive/folders/1A6cQZlPTy5Xtc8IrlKcnwelcyuyhroiS?usp=sharing',
                    'file_validated' => rand(0, 2),
                    'payment_validated' => 0,
                ];
            }
        }

        DetailRegistration::insert($detail_registrations);
    }
}
