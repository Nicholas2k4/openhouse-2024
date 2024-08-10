<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UKMController extends Controller
{
    public function show($id){
        $ukm = \App\Models\Ukm::findOrFail($id);

        $slug = DB::table('ukm') ->where('id', $id) ->value('slug');

        if(File::exists(public_path('foto/'.$slug))){
            $imageFiles = File::files(public_path('foto/'.$slug));
        }else{
            $imageFiles = [];
        }

        $imageUrls = [];

        foreach($imageFiles as $imageFile){
            $imageUrls[] = asset('foto/'.$slug.'/'.basename($imageFile));
        }
    
        $posterFiles = File::files(public_path('poster'));

        foreach($posterFiles as $posterFile){
            $filename = pathinfo($posterFile->getFilename(), PATHINFO_FILENAME);
            if (strpos($filename, $slug) !== false) {
                $posterUrl = 'poster/' . $posterFile->getFilename();
                break;
            }else{
                $posterUrl = "";
            }
        }

        $videoUrls = [
            'esport' => 'https://drive.google.com/file/d/1AWrSAsLvKp1TWi3maatBR38gazApTN7z/preview',
            'modeling' => 'https://drive.google.com/file/d/1FNM_ka70MvyX7L_EeKnuEbyJ7ZD0ni69/preview',
            'dekorasi' => 'https://drive.google.com/file/d/1ql0B9DcPZheUdF0vf9w3dCpzGfkbBIrq/preview',
            'martografi' => 'https://drive.google.com/file/d/1qR1zSMPybXjLdEgmYR4hPmrNaJjUaPe3/preview',
            'chinese' => 'https://drive.google.com/file/d/1td3UiPuCM7v36fwofd5HTdcoLTRs99v8/preview',
            'badmin' => 'https://drive.google.com/file/d/10clxCtELI-62XFZUzwiRGhvSNolaUeo7/preview',
            'matrapala' => 'https://drive.google.com/file/d/1WzVnPcJJhjXGkcXG4l3lfIDlU1JttZSV/preview',
            'menwa' => 'https://drive.google.com/file/d/1gwtvggf0UVCoqrR_IlnsL1CV6T5Vuntc/preview',
            'bem' => 'https://drive.google.com/file/d/1oYVwk5QuBqtvjnM8RPklWERmqhqUw3Nu/preview',
            'teater' => 'https://drive.google.com/file/d/1X1z3Av51T8hI42NRWkPB6FDi_3mOwvE6/preview',
            'pd' => 'https://drive.google.com/file/d/1GrKJ36mCs6zQ8M7ZhV1-HmcW2Wfi26gq/preview',
            'tenis-meja' => 'https://drive.google.com/file/d/1aeGok4RI6NEOeymAu0m4-Rg3VMUmPXWc/preview',
            'mpz' => 'https://drive.google.com/file/d/1VeciEwZ6qyW_KmiPDDcQG5YRu9UyoSDM/preview',
            'emr' => 'https://drive.google.com/file/d/1P6gsb6k4W1DXscXHN5RSnRItmX_ZoU2t/preview',
            'vg' => 'https://drive.google.com/file/d/1aUaMolYAW-iIAwXp_VX5kuR1xB1Jz4PC/preview',
            'futsal' => 'https://drive.google.com/file/d/1VbrZl637ocLP0u8JvNmg9qHUFMN2QXsu/preview'
        ];

        $videoUrl = $videoUrls[$slug];
        
        return view('user/show', compact('ukm', 'id', 'imageUrls', 'posterUrl', 'videoUrl'));
    }
}
