<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UKMController extends Controller
{

    public function ukm()
    {
        $ukms = Ukm::all();
        $data['title'] = "UKM";
        $data['list_ukms'] = $ukms;
        $data['ukms'] = UKMController::getUkms();
        return view('user.ukm', $data);
    }

    public function lk()
    {
        $ukms = Ukm::all();
        $data['title'] = "Lembaga Kemahasiswaan";
        $data['list_ukms'] = $ukms;
        $data['ukms'] = UKMController::getUkms();
        return view('user.lk', $data);
    }

    // Ambil data untuk search-bar di navbar
    public static function getUkms()
    {
        $ukms = Ukm::all();
        $ukms_temp = [];

        foreach ($ukms as $ukm) {
            if (substr($ukm->name, 0, 2) == 'LK') {
                $ukms_temp[$ukm->name] = '/lk/' . $ukm->id;
            } else if (substr($ukm->name, 0, 3) == 'UKM') {
                $ukms_temp[$ukm->name] = '/ukm/' . $ukm->id;
            }
        }
        return $ukms_temp;
    }

    public function show($slug)
    {
        $ukm = Ukm::where('slug', $slug)->firstOrFail();

        if (File::exists(public_path('foto/' . $slug))) {
            $imageFiles = File::files(public_path('foto/' . $slug));
        } else {
            $imageFiles = [];
        }

        $imageUrls = [];

        foreach ($imageFiles as $imageFile) {
            $imageUrls[] = asset('foto/' . $slug . '/' . basename($imageFile));
        }

        $posterFiles = File::files(public_path('poster'));

        $videoUrls = [
            'esport' => 'https://drive.google.com/file/d/1AWrSAsLvKp1TWi3maatBR38gazApTN7z/preview',
            'modeling' => 'https://drive.google.com/file/d/1FNM_ka70MvyX7L_EeKnuEbyJ7ZD0ni69/preview',
            'dekorasi' => 'https://drive.google.com/file/d/1ql0B9DcPZheUdF0vf9w3dCpzGfkbBIrq/preview',
            'martografi' => 'https://drive.google.com/file/d/1qR1zSMPybXjLdEgmYR4hPmrNaJjUaPe3/preview',
            'chinese' => 'https://drive.google.com/file/d/1td3UiPuCM7v36fwofd5HTdcoLTRs99v8/preview',
            'badmin' => 'https://drive.google.com/file/d/10clxCtELI-62XFZUzwiRGhvSNolaUeo7/preview',
            'matrapala' => 'https://drive.google.com/file/d/1WzVnPcJJhjXGkcXG4l3lfIDlU1JttZSV/preview',
            'menwa' => 'https://drive.google.com/file/d/1gwtvggf0UVCoqrR_IlnsL1CV6T5Vuntc/preview',
            'bem' => 'https://drive.google.com/file/d/1F4gy9XpwSei6KrfmOAJCVxZdh-vRAuM_/preview',
            'teater' => 'https://drive.google.com/file/d/1X1z3Av51T8hI42NRWkPB6FDi_3mOwvE6/preview',
            'pd' => 'https://drive.google.com/file/d/1GrKJ36mCs6zQ8M7ZhV1-HmcW2Wfi26gq/preview',
            'tenis-meja' => 'https://drive.google.com/file/d/1aeGok4RI6NEOeymAu0m4-Rg3VMUmPXWc/preview',
            'mpz' => 'https://drive.google.com/file/d/1VeciEwZ6qyW_KmiPDDcQG5YRu9UyoSDM/preview',
            'emr' => 'https://drive.google.com/file/d/1P6gsb6k4W1DXscXHN5RSnRItmX_ZoU2t/preview',
            'vg' => 'https://drive.google.com/file/d/1aUaMolYAW-iIAwXp_VX5kuR1xB1Jz4PC/preview',
            'futsal' => 'https://drive.google.com/file/d/1VbrZl637ocLP0u8JvNmg9qHUFMN2QXsu/preview',
            'tps' => 'https://drive.google.com/file/d/1i1Q3ZTO_bV7vQEBllQz-5MSZec3r03KH/preview',
            'bpmf' => ['https://drive.google.com/file/d/1W3xfo4Ewynaf0Qu5qLZ0lgUn5m8uSjQv/preview', 'https://drive.google.com/file/d/1zWE5AUTN9_L_TTCXsy-1BLEvZFuX-IIw/preview', 'https://drive.google.com/file/d/1an4PJBojggTW-85k8JIGHwd1bWUudOHQ/preview'],
            'basket' => 'https://drive.google.com/file/d/1a2-JpT0_4vSfX-gawP5bmNcZYtGGYvy2/preview',
            'asfs' => 'https://drive.google.com/file/d/1WhHXY0eibJykn4Bd9nqliSbHLqxZYCOP/preview',
            'taekwondo' => 'https://drive.google.com/file/d/1NChFXQboEAJ1b98tG_mIqKz9DjczPRCn/preview',
            'orkestra' => 'https://drive.google.com/file/d/1V1hO89znFrbiHHVyyDT074kwUfWLYAy0/preview',
            'catur' => 'https://drive.google.com/file/d/1IcI8fN6VcJCsWMGd8tOW6xYOannCdzp0/preview',
            'dance' => 'https://drive.google.com/file/d/1WOacT3Am_rpJzqxJPxRHPV3IycVADomH/preview',
            'voli' => 'https://drive.google.com/file/d/1DYVVZ5URuYJ6s9d7kpaUe3VldOQxG8vq/preview',
            'debate' => 'https://drive.google.com/file/d/15Qgd09SPkRyan1j6IfcPm6-bm4ZOSV0j/preview',
            'ilustrasi' => 'https://drive.google.com/file/d/1KhNwm1Q_3q6_beKyRynZSC25j49-rkrw/preview',
            'padus' => 'https://drive.google.com/file/d/13WPnsdDZ_dhT4AV6B70Tf85yCDXbHsvA/preview',
            'tenis-lapangan' => 'https://drive.google.com/file/d/18SNk1v5L2UZTEmoTMDcO5epxVR8cPILZ/preview',
            'mpm' => 'https://drive.google.com/file/d/10VyrX7mWzriCSEfamGckn5M6Xwmc34y8/preview',
            'pelma' => 'https://drive.google.com/file/d/1wKE1XoiyZmern57Pe6c3VG8NBOA-rmaj/preview',
            'persma' => 'https://drive.google.com/file/d/1oJylHMIO7-IWw716e1A9CaJALXFWSU7z/preview',
            'renang' => 'https://drive.google.com/file/d/1XNwUUBv56DZg4y6xQgVy3u7GrHVo5DuK/preview',
        ];

        $videoUrl = $videoUrls[$slug] ?? "";

        return view('user/show', compact('ukm', 'imageUrls', 'videoUrl'));
    }
}
