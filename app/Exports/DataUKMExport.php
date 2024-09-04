<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class DataUKMExport implements WithMultipleSheets
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function sheets(): array
    {
        return [
            'UKM ASFS' => new AsfsSheet(),
            'UKM Badminton' => new BadmintonSheet(),
            'UKM Catur' => new CaturSheet(),
            'Klub Chinese Art' => new ChineseSheet(),
            'UKM Basket' => new BasketSheet(),
            'UKM Dance' => new DanceSheet(),
            'UKM English Debate Society' => new DebateSheet(),
            'UKM Dekorasi' => new DekorSheet(),
            'UKM EMR' => new EmrSheet(),
            'UKM E-sport' => new EsportSheet(),
            'UKM Futsal' => new FutsalSheet(),
            'UKM Ilustrasi' => new IlustrasiSheet(),
            'UKM Martografi' => new MartografiSheet(),
            'UKM Matrapala' => new MatrapalaSheet(),
            'UKM Matrapenza' => new MatrapenzaSheet(),
            'UKM Menwa' => new MenwaSheet(),
            'UKM Modeling' => new ModelingSheet(),
            'UKM Pengembangan Diri' => new PengembanganDiriSheet(),
            'UKM Renang' => new RenangSheet(),
            'UKM Taekwondo' => new TaekwondoSheet(),
            'UKM Teater' => new TeaterSheet(),
            'UKM Tenis Lapangan' => new TenisLapanganSheet(),
            'UKM Tenis Meja' => new TenisMejaSheet(),
            'UKM Vocal Group' => new VocalSheet(),
            'UKM Voli' => new VoliSheet(),
        ];
    }
}
