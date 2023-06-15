<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function tampil(){
        $meja = Meja::all();
        return view('/landing/keranjang', ['mejas' => $meja]);
    }
}
