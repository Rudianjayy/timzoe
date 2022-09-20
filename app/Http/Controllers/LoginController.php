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

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/welcome');
        }else{
            return redirect('login')->with('password','password salah');
        }

       
    }

    public function register(){
        return view('daftar.register');
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
            'email.required' =>'Harus diisi',
            // 'nidn.min' =>'min 4 karakter',
            // 'nidn.max' =>'max 7 karakter',
            'password.required' =>'Harus diisi',
        ]);
        User::create([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
