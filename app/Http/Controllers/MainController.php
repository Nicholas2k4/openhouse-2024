<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data['title'] = 'Homepage';
        return view('user.homepage', $data);
    }

    public function wait()
    {
        return view('user.wait');
    }
}
