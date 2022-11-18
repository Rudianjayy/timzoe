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
            'foto' => 'noimg.png',
            'foto_bg' => 'header.jpg',
            'role' => 'user',
            'remember_token' => Str::random(60),

        ]);
        return redirect('/login')->with('toast_success','Berhasil daftar!');
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('toast_success', 'Anda berhasil logout!');
    }








    public function loby26()
    {
        $data1 = User::all();
        return view('operator.operator', compact('data1'));
    }
    public function tambahoperator()
    {
        return view('operator.tambah-operator');
    }

    public function submitdata26(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ], [
            'name.required' => 'Harus diisi',
            'email.required' => 'Harus diisi',
            'password.required' => 'Harus diisi',
            'role.required' => 'Harus diisi',

        ]);
        $data1 = User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'notelpon' => $request->notelpon,
            'foto' => $request->foto,
            'foto_bg' => $request->foto_bg,
            'alamat' => $request->alamat,


        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotojurusan/', $request->file('foto')->getClientOriginalName());
            $data1->foto = $request->file('foto')->getClientOriginalName();
            $data1->save();
        }
        if($request->hasFile('foto_bg')){
            $request->file('foto_bg')->move('fotojurusan/', $request->file('foto_bg')->getClientOriginalName());
            $data1->foto_bg = $request->file('foto_bg')->getClientOriginalName();
            $data1->save();
        }

        return redirect()->route('adminoperator')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editoperator($id)
    {

        $data1 = User::findOrFail($id);
        return view('operator.edit-operator', compact('data1'));
    }

    public function submitedit26(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ], [
            'name.required' => 'Harus diisi',
            'email.required' => 'Harus diisi',
            'password.required' => 'Harus diisi',
            'role.required' => 'Harus diisi',
        ]);
        $data1 = User::find($id);
        $data1->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'notelpon' => $request->notelpon,
            'alamat' => $request->alamat,
            'role' => $request->role,
        ]);

        return redirect('adminoperator')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deleteoperator($id)
    {
        $data1 = User::find($id);
        $data1->delete();
        return redirect('adminoperator')->with('success', ' Data Berhasil di Hapus!');
    }

    public function logoutoperator(){
        Auth::guard('operator1')->logout();
        return redirect('login')->with('success', 'Anda berhasil logout!');
    }

    public function logoutuser(){
        Auth::guard('user')->logout();
        return redirect('login')->with('success', 'Anda berhasil logout!');
    }


}
