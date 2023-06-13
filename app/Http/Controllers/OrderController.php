<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Proses penambahan pesanan ke keranjang
        $menuId = $validatedData['menu_id'];
        $jumlah = $validatedData['jumlah'];

        // Simpan pesanan ke dalam database
        $order = new Order;
        $order->menu_id = $menuId;
        $order->jumlah = $jumlah;
        // Jika Anda juga ingin menyimpan nomor meja, sesuaikan dengan field yang ada pada model Order
        $order->nomor_meja = $request->nomor_meja;
        $order->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
