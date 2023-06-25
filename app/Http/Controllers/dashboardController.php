<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        if (!Auth()->check()) {
            
            return redirect('/sesi');
        } else {            
            $jumlahmenu = Menu::count();
            $jumlahorder = Order::count();
            $jumlahuser = User::count();
            return view('/dashboard/index', ['jumlahmenu'=>$jumlahmenu, 'jumlahorder'=>$jumlahorder, 'jumlahuser'=>$jumlahuser]);            
        }
    }
    public function kasir(){
        if (!Auth()->check()) {
            return redirect('/sesi');
        } else {        
            $jumlahmenu = Menu::count();
            return view('/dashboard/kasir', ['jumlahmenu'=>$jumlahmenu]);            
        }
    }
}
