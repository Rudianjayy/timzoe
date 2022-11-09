<?php

namespace App\Http\Controllers;
use App\Models\footeer;

use Illuminate\Http\Request;
use App\Models\Footeerdua;

class FooteerController extends Controller
{


    public function footeeradmin(){
        $link = footeerdua::all();
        $data = footeer::all();
        return view('footeer.footeer-admin', compact('data','link'));
    }
    public function tambahfooteer()
    {
        return view('footeer.tambahfooteer');
    }

    public function footeerproses7(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_footeer' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_footeer.required' =>'Harus diisi',

        ]);
        $data = footeer::create([
            'foto' =>$request->foto,
            'deskripsi_footeer' =>$request->deskripsi_footeer,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('footeeradmin')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editfooteer($id){

        $data = footeer::findOrFail($id);
        return view('footeer.editfooteer', compact('data'));
    }

    public function editproses7(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_footeer' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_footeer' =>'harus diisi',

        ]);
        $data = footeer::find($id);
        $data->update([
            'deskripsi_footeer' =>$request->deskripsi_footeer,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('footeeradmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function deletefooteer($id){
        $data = footeer::find($id);
        $data->delete();
        return redirect('footeeradmin')->with('success',' Data Berhasil di Hapus!');
    }





}
