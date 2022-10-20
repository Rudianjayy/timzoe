<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{


    public function adminmitra() {
        $data = Mitra::all();
        return view('mitra.admin-mitra', compact('data'));
    }
    public function tambahmitra()
    {
        return view('mitra.tambah-mitra');
    }

    public function submitdata14(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_mitra' =>'required',
        ],[
            'foto_mitra.required' =>'Harus diisi',

        ]);
        $data = Mitra::create([
            'foto_mitra' =>$request->foto_mitra,

        ]);
        if($request->hasFile('foto_mitra')){
            $request->file('foto_mitra')->move('fotomahasiswa/', $request->file('foto_mitra')->getClientOriginalName());
            $data->foto_mitra = $request->file('foto_mitra')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminmitra')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editmitra($id){

        $data = Mitra::findOrFail($id);
        return view('mitra.edit-mitra', compact('data'));
    }

    public function submitedit14(Request $request, $id){
        // $this->validate($request,[
        //     'deskripsi_tentangkami' =>'required',
        // ],[
        //     'deskripsi_tentangkami' =>'harus diisi',

        // ]);
        $data = Mitra::find($id);
        $data->update([

        ]);
        if($request->hasFile('foto_mitra')){
            $request->file('foto_mitra')->move('fotomahasiswa/',$request->file('foto_mitra')->getClientOriginalName());
            $data->foto_mitra = $request->file('foto_mitra')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminmitra')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletemitra($id){
        $data = Mitra::find($id);
        $data->delete();
        return redirect('adminmitra')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
