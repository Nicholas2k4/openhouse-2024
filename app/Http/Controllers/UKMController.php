<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UKMController extends Controller
{
    public function show($id){
        $ukm = \App\Models\Ukm::findOrFail($id);
        return view('user/show', compact('ukm', 'id'));
    }
}
