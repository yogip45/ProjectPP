<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        if (!Auth()->check()) {
            return redirect('/sesi');
        } else {            
            return view('/dashboard/index');
        }
    }
    public function kasir(){
        if (!Auth()->check()) {
            return redirect('/sesi');
        } else {            
            return view('/dashboard/kasir');
        }
    }
}
