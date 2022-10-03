<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;
use App\Models\Fotokompetensi;
use App\Models\Muhinews;

class KompetensiController extends Controller
{
    public function kompetensi() {
        $kompetensi = Kompetensi::all();
        $foto = Fotokompetensi::all();
        $f = Muhinews::all();
        return view('kurikulum.kompetensi', compact('kompetensi','foto','f'));
    }
    public function tkj(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.tkj', compact('f'));
    }
    public function rpl(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.rpl', compact('f'));
    }
    public function bd(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.bd', compact('f'));
    }
    public function ak(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.ak', compact('f'));
    }
    public function dkv(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.dkv', compact('f'));
    }
    public function ulp(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.ulp', 'f');
    }
    public function mp(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.mp', compact('f'));
    }
    public function ph(){
        $f = Muhinews::all();
        return view('kurikulum.kompetensi.ph', compact('f'));
    }


















    public function kompetensiadmin(){
        $data = Kompetensi::all();
        return view('kurikulum.keahlian.kompetensi-admin', compact('data'));
    }

    public function tambahkompetensi(){
        return view('kurikulum.keahlian.tambah-kompetensi');
    }

    public function kompetensiproses(Request $request){
        $this->validate($request,[
            'judul_kompetensi' =>'required',
            'deskripsi_kompetensi' =>'required',
        ],[
            'judul_kompetensi.required' =>'Harus diisi',
            'deskripsi_kompetensi.required' =>'Harus diisi',

        ]);
        $data = Kompetensi::create([
            'judul_kompetensi' =>$request->judul_kompetensi,
            'deskripsi_kompetensi' =>$request->deskripsi_kompetensi,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect()->route('kompetensiadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
    public function editkompetensi($id){

        $data = Kompetensi::findOrFail($id);
        return view('kurikulum.keahlian.edit-kompetensi', compact('data'));
    }

    public function editproseskompetensi(Request $request, $id){
        $this->validate($request,[
            'judul_kompetensi' =>'required',
            'deskripsi_kompetensi' =>'required',
        ],[
            'judul_kompetensi' =>'harus diisi',
            'deskripsi_kompetensi' =>'harus diisi',

        ]);
        $data = Kompetensi::find($id);
        $data->update([
            'judul_kompetensi' =>$request->judul_kompetensi,
            'deskripsi_kompetensi' =>$request->deskripsi_kompetensi,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('kompetensiadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Kompetensi::find($id);
        $data->delete();
        return redirect('kompetensiadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }








}
