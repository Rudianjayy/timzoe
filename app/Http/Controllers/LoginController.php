<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('daftar.login');
    }

    public function loginproses(Request $request){
        $this->validate($request,[
            'email' =>'required|exists:users,email',
            'password' =>'required',
        ],[
            'email.required' =>'Harus diisi',
            'email.exists' =>'Email salah',
            'password.required' =>'Harus diisi',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/welcome')->with('toast_success','Login Berhasil!');
        }else{
            return redirect()->back()->with('password','password salah');
        }


        
    }

 

    public function registeruser(Request $request){
        $this->validate($request,[
            'name' =>'required|unique:users,name',
            'email' =>'required|unique:users,email',
            'password' =>'required',
        ],[
            'name.required' =>' Harus diisi',
            'name.unique' =>' Nama sudah dipakai',
            'email.unique' =>'Email sudah dipakai',
            'email.required' =>'Email harus diisi',
            // 'nidn.min' =>'min 4 karakter',
            // 'nidn.max' =>'max 7 karakter',
            'password.required' =>'Sandi harus diisi',
        ]);
        User::create([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'remember_token' => Str::random(60),

        ]);
        return redirect('/login')->with('toast_success','Berhasil daftar!');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
