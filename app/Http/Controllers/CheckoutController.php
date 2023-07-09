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
    public function allpesanan($no_meja){
        $no = $no_meja;
        $data = Order::with('menu')->where('nomor_meja', $no)
        ->get();                
        return view('/landing/allpesanan')->with('order',$data);
    }
    public function tampilsemua(){
        // $data = Order::all();
        $data = Order::with('menu')->where('status', 'belum selesai')->paginate(5);
        return view('/dashboard/pesanan')->with('order',$data);
    }

    public function tampilselesai(){
        // $data = Order::all();
        $data = Order::with('menu')->where('status', 'selesai')->paginate(5);
        return view('/dashboard/pesananselesai')->with('order',$data);
    }

    public function tambahitem(Request $request){
        $data = Order::create($request->only('menu_id','nomor_meja','jumlah','status'));
        return redirect()->route('tampil.menu')->with('success','Data Berhasil Ditambah');
    }
    public function cetakstrukform(){
        return view('/dashboard/cetakform');
    }
    public function delete($id){
        $data = Order::find($id);
        $data->delete();
        return redirect()->route('tampil.selesai')->with('success','Data Berhasil Dihapus');
    }
    public function struk($no_meja){        
        $no = $no_meja;
        $data = Order::with('menu')->where('nomor_meja', $no)
        ->where('status', 'selesai')
        ->get();                
        return view('/dashboard/struk')->with('data',$data);
        
    }
    public function ubahstatus(Request $request, $id)
{
    $order = Order::find($id);
    $order->status = 'selesai';
    $order->save();

    return redirect()->back()->with('success', 'Berhasil.');
}
}
