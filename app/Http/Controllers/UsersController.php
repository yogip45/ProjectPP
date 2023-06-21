<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function tampil(){
        $users = User::all();
        return view('/dashboard/users', ['users' => $users]); 
    }
    public function tambah(Request $request){
    $data = User::create($request->all());
    // dd($data);
    return redirect()->route('tampiluser')->with('success', 'Data Berhasil Ditambah');
}
public function tampilbyid($id){
    $data = User::find($id);    
    return view('/dashboard/edituser')->with('data',$data);
}
public function edituser(Request $request, $id){
    $data = User::find($id);
    $data->update($request->all());    
    return redirect()->route('tampiluser')->with('success','Data Berhasil Diubah');
}
public function deleteuser($id){
    $data = User::find($id);
    $data->delete();
    return redirect()->route('tampiluser')->with('success','Data Berhasil Dihapus');
}


}
