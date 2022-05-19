<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function individual()
    {
        return view('idv-setting');
    }

    public function organization()
    {
        return view('org-setting');
    }
}
