<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ProfiladminController extends Controller
{



    public function profiladmin(){
        $fotobg = User::all();
        $data = User::all();
        $fotoprofil = User::all();
        $alamat = User::all();
        return view('Profil.Profiladmin', compact('data','fotoprofil','fotobg','alamat'));
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
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
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
}
