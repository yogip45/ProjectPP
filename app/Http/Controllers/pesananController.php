<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function simpanPesanan(Request $request){
        $validatedData = $request->validate([
            'nomor_meja' => 'required',
            'nama_pelanggan' => 'required',
        ]);
    
        // Buat pesanan baru
        $pesanan = new pesanan();
        $pesanan->nomor_meja = $validatedData['nomor_meja'];
        $pesanan->nama_pelanggan = $validatedData['nama_pelanggan'];
        $pesanan->status = 'menunggu';
        $pesanan->save();
    
        // Redirect atau tampilkan pesan berhasil
        // return redirect()->back()->with('success', 'Pesanan berhasil disimpan.');
        return redirect()->route('tampil.menu')->with('success', 'Pesanan berhasil disimpan.');
    }
    public function lihatPesanan(){
    $pesanan = Pesanan::all();
    return view('pesanan.lihat', ['pesanan' => $pesanan]);
}
public function menu(){
    return view('landing/menu');
}
}
