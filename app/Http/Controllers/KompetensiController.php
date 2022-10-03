<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;
use App\Models\Fotokompetensi;

class KompetensiController extends Controller
{
    public function kompetensi() {
        $kompetensi = Kompetensi::all();
        $foto = Fotokompetensi::all();
        return view('kurikulum.kompetensi', compact('kompetensi','foto'));
    }
    public function tkj(){
        return view('kurikulum.kompetensi.tkj');
    }
    public function rpl(){
        return view('kurikulum.kompetensi.rpl');
    }
    public function bd(){
        return view('kurikulum.kompetensi.bd');
    }
    public function ak(){
        return view('kurikulum.kompetensi.ak');
    }
    public function dkv(){
        return view('kurikulum.kompetensi.dkv');
    }
    public function ulp(){
        return view('kurikulum.kompetensi.ulp');
    }
    public function mp(){
        return view('kurikulum.kompetensi.mp');
    }
    public function ph(){
        return view('kurikulum.kompetensi.ph');
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
