<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfiladminController extends Controller
{



    public function profiladmin(){
        $fotobg = User::all();
        $data = User::all();
        $fotoprofil = User::all();
        return view('Profil.Profiladmin', compact('data','fotoprofil','fotobg'));
    }
    public function editprofiladmin(request $request){
        $fotoprofil = User::all();
        $data = User::findOrFail(Auth::user()->id);
        return view('Profil.editprofiladmin', compact('data','fotoprofil'));
    }

    public function updateprofiladmin(request $request){
        $data = User::find(Auth::user()->id);
        $data->update([
            'name' => $request->name,
            'alamat' => '-',
            'notelpon' => '-',
            //  'foto' => null,
            // 'foto_bg' => null,
        ]);
        // dd($request);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('foto_bg')){
            $request->file('foto_bg')->move('fotoprofil/', $request->file('foto_bg')->getClientOriginalName());
            $data->foto_bg = $request->file('foto_bg')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profiladmin')->with('success' , 'Profil Berhasil Di Update!');
    }



    //editpassword


    public function editpassword(){
        return view('profil.editpassword');
    }

    public function updatepassword(request $request){
        $request->validate([
            'password_lama' => 'required|min:6|max:100',
            'password' => 'required|min:6|max:100',
            'password_confirmation' => 'required',
        ],[
        'password_lama.required' => 'password lama harus diisi',
        'password_lama.min' => 'password lama harus diisi lebih dari 6',
        'password.required' => 'password baru harus diisi',
        'password.min' => 'password lama harus lebih dari 6',
        'password.confirmed.required' => 'password tidak sama',
        'password_confirmation.required' => 'password harus diisi',
        ]);
        $current_user=auth()->user();
        if(Hash::check($request->password_lama,$current_user->password)){
            $current_user->update([
                'password'=>bcrypt($request->password)
            ]);
            return redirect()->back()->with('succes','password sukses diganti');
            
        } else{
        return redirect()->back()->with('error','password lama tidak bisa.');

        }
    }

}
