<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data['title'] = 'Homepage';
        return view('user.homepage', $data);
    }
}
