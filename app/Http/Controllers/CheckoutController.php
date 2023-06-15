<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function tampil($id){
        $data = Menu::find($id);
        // dd($data);
        return view('/landing/keranjang')->with('data',$data);
        // $meja = Meja::all();
        // return view('/landing/keranjang', ['mejas' => $meja]);
    }

    public function tambahitem(Request $request){
        $data = Order::create($request->only('menu_id','nomor_meja','jumlah'));
        return redirect()->route('tampil.menu')->with('success','Data Berhasil Ditambah');
    }
}
