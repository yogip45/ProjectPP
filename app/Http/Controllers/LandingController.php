<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function meja(){
        return view('landing/meja');
    }
}
