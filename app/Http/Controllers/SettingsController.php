<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(){
        return view('settings.settings');
    }

    public function forgotPassword(){
        return view('settings.forgot-password');
    }
}
