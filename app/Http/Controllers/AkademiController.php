<?php

namespace App\Http\Controllers;

use App\Models\Akademi;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Kompetensi;
use Illuminate\Http\Request;
use App\Models\Fotokompetensi;
use App\Models\Personaljurusan;

class AkademiController extends Controller
{
    public function indexakademi() {
        $kompetensi = Kompetensi::all();
        $foto = Fotokompetensi::all();
        $f = Muhinews::paginate(4 );
        $kh = Jurusan::all();
        $pj = Personaljurusan::all();
        $kp = Kompetensi::all();
        $akdm = Akademi::all();
        $akademi = Akademi::all();
        return view('akademi.akademi', compact('kompetensi','foto','f','kh','pj','kp','akdm','akademi'));
    }

    public function loby6(){
        $data = Akademi::all();
        return view('akademi.admin-akademi', compact('data'));
    }

    public function tambahakademi(){
        return view('akademi.tambah-akademi');
    }

    public function submitdata6(Request $request){
        $this->validate($request,[
            'judul_akademi' =>'required',
            'deskripsi_akademi' =>'required',
        ],[
            'judul_akademi.required' =>'Harus diisi',
            'deskripsi_akademi.required' =>'Harus diisi',

        ]);
        $data = Akademi::create([
            'foto' =>$request->foto,
            'judul_akademi' =>$request->judul_akademi,
            'deskripsi_akademi' =>$request->deskripsi_akademi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('dataakademi')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
    public function editakademi($id){

        $data = Akademi::findOrFail($id);
        return view('akademi.edit-akademi', compact('data'));
    }

    public function submitedit6(Request $request, $id){
        $this->validate($request,[
            'judul_akademi' =>'required',
            'deskripsi_akademi' =>'required',
        ],[
            'judul_akademi' =>'harus diisi',
            'deskripsi_akademi' =>'harus diisi',

        ]);
        $data = Akademi::find($id);
        $data->update([
            'judul_akademi' =>$request->judul_akademi,
            'deskripsi_akademi' =>$request->deskripsi_akademi,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('dataakademi')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Akademi::find($id);
        $data->delete();
        return redirect('dataakademi')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
