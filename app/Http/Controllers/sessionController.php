<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class sessionController extends Controller
{
    function index(){
        return view("auth/login");
    }
    function login(Request $request){
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password

        ];
        if(Auth::attempt($infologin)){
            //sukses auth
            //  return 'sukses';
            return redirect('/dashboard');
        }else {
            // return 'gagal';
            return redirect('/sesi')->withErrors('Username atau Password Salah');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/sesi')->with('success','Berhasil Logout');
    }

}
