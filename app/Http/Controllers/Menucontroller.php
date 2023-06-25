<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\pesanan;
use Illuminate\Http\Request;

class Menucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('/landing/menu', ['menus' => $menus]);             
    }

    // public function tampildimodal($id)
    // {
    //     // $menus = Menu::all();
    //     $menus = Menu::all();
    //     return view('/landing/menu')->with(['menus' => $menus]);            
    // }
    public function admin(){
        $menus = Menu::all();
        return view('/dashboard/menu', ['menus'=>$menus]);
        // $jumlahmenu = Menu::count();
    }   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = Menu::create($request->all());
        $data = Menu::create($request->only('nama_menu','harga','gambar'));
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarmenu/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();      
            $data->save();
            // dd($data);
        }        
        return redirect()->route('menus')->with('success','Data Berhasil Ditambah');
    }
    
    public function tampil($id){
        $data = Menu::find($id);
        // dd($data);
        return view('/dashboard/editmenu')->with('data',$data);
    }
    
    public function editdata(Request $request, $id){
        $data = Menu::find($id);
        $data->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarmenu/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();      
            $data->save();        
        }
        return redirect()->route('menus')->with('success','Data Berhasil Diubah');
    }
    
    public function delete($id){
        $data = Menu::find($id);
        $data->delete();
        return redirect()->route('menus')->with('success','Data Berhasil Dihapus');
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
