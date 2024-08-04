<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validatePage()
    {
        $data['tabTitle'] = 'Validate';
        return view('admin.validate', $data);
    }

    public function generatePage()
    {
        $data['tabTitle'] = 'Generate';
        return view('admin.generate', $data);
    }
}
