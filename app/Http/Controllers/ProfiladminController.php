<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ProfiladminController extends Controller
{



    public function profiladmin(){
        $data = User::all();
        return view('Profil.Profiladmin', compact('data'));
    }
    public function editprofiladmin(request $request){
        $data = User::findOrFail(Auth::user()->id);
        return view('Profil.editprofiladmin', compact('data'));
    }

    public function updateprofiladmin(request $request){
        $data = User::find(Auth::user()->id);
        $data->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
        ]);
        return redirect()->route('profiladmin')->with('success' , 'Data Berhasil Di Update!');
    }
}
