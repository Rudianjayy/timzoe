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
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        $this->validate($request,[
            'email' =>'required|exists:users,email',
            'password' =>'required',
        ],[
            'email.required' =>'Harus diisi',
            'email.exists' =>'Email salah',
            'password.required' =>'Harus diisi',
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

        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $this->validate($request,[
            'name' =>'required|unique:users,name',
            'email' =>'required|unique:users,email',
            'password' =>'required',
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
        return redirect('/login')->with('success','Berhasil daftar!');
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('success', 'Anda berhasil logout!');
    }



  
}
