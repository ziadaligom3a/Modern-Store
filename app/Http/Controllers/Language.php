<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Language extends Controller
{
    public function en(){

        Session::put('lang','en');
        app()->setLocale('en');
        return back();
    }

    public function ar(){

        
        Session::put('lang','ar');
        app()->setLocale('en');
        return back();
    }
}
