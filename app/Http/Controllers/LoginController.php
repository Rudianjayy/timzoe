<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('daftar.login');
    }

    public function loginproses(Request $request){
        $this->validate($request,[
            'email' =>'required|exists:users,email',
            'password' =>'required',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/welcome')->with('success','Login Berhasil!');
        }else{
            return redirect()->back()->with('password','password salah');
        }



    }

    public function register(){
        return view('daftar.register');
    }

    public function registeruser(Request $request){
        $this->validate($request,[
            'name' =>'required|max:150',
            'email' =>'required|unique:users,email',
            'password' =>'required|min:5|max:50',
        ],[
            'name.required' =>'Nama harus diisi',
            'name.unique' =>' Nama sudah dipakai',
            'email.unique' =>'Email sudah dipakai',
            'email.required' =>'Email harus diisi',
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
        return redirect('login')->with('toast_success', 'Anda berhasil logout!');
    }




}
