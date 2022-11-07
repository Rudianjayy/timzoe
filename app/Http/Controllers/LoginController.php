<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function register(){
        return view('daftar.register');
    }

    public function registeruser(Request $request){

        $rules = [
            'name' =>'required|unique:users,name',
            'email' =>'required|unique:users,email',
            'password' =>'required',
        ];

        $pesan = [
            'name.required' =>' Harus diisi',
            'name.unique' =>' Nama sudah dipakai',
            'email.unique' =>'Email sudah dipakai',
            'email.required' =>'Email harus diisi',
            'password.required' =>'Sandi harus diisi',
        ];

        $validasi = Validator::make($request->all(), $rules, $pesan);

        if($validasi->fails()){
            return response()->with(['success' => 0, 'pesan' => $validasi->errors()->first()], 422);
        }

        User::create([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'remember_token' => Str::random(60),

        ]);
        return redirect('/login')->with('btn btn-success success','Berhasil daftar!');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
