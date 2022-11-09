<?php

namespace App\Http\Controllers;

use App\Models\Akademi;
use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Kompetensi;
use Illuminate\Http\Request;
use App\Models\Fotokompetensi;
use App\Models\Personaljurusan;
use App\Models\footeerdua;

class AkademiController extends Controller
{
    public function indexakademi() {
        $kompetensi = Kompetensi::all();
        $foto = Fotokompetensi::all();
        $f = Muhinews::paginate(4 );
        $kh = Jurusan::all();
        $pj = Personaljurusan::all();
        $personal = Personaljurusan::all();
        $kp = Kompetensi::all();
        $akdm = Akademi::all();
        $akademi = Akademi::all();
        $ft= footeer::all();
        $logo= footeer::all();
        $link = footeerdua::all();
        return view('akademi.akademi', compact('kompetensi','foto','f','kh','pj','kp','akdm','akademi','personal','ft','logo','link'));
    }


    public function detailakademi($id){
        $dekad= Akademi::findOrFail($id);
        // $foto= Akademi::where('akademis_id',$id)->paginate(2);
        $personal= Personaljurusan::all();
        $akademi = Akademi::all();
        $ft = footeer::all();
        return view('akademi.detail-akademi', compact('dekad','akademi','personal','ft'));
    }


    public function detaildeskripsi($id){
        $data = Akademi::findOrFail($id);
        return view('akademi.detaildeskripsi',compact('data'));
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
            'deskripsi_detail' =>'required',
            'alamat' =>'required',
            'email' =>'required',
            'notelpon' =>'required',
        ],[
            'judul_akademi.required' =>'Harus diisi',
            'deskripsi_akademi.required' =>'Harus diisi',
            'deskripsi_detail.required' =>'Harus diisi',
            'alamat.required' =>'Harus diisi',
            'email.required' =>'Harus diisi',
            'notelpon.required' =>'Harus diisi',

        ]);
        $data = Akademi::create([
            'foto' =>$request->foto,
            'judul_akademi' =>$request->judul_akademi,
            'deskripsi_akademi' =>$request->deskripsi_akademi,
            'deskripsi_detail' =>$request->deskripsi_detail,
            'alamat' =>$request->alamat,
            'email' =>$request->email,
            'notelpon' =>$request->notelpon,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('dataakademi')->with('success',' Data Berhasil di Tambahkan!');
    }
    public function editakademi($id){

        $data = Akademi::findOrFail($id);
        return view('akademi.edit-akademi', compact('data'));
    }

    public function submitedit6(Request $request, $id){
        $this->validate($request,[
            'judul_akademi' =>'required',
            'deskripsi_akademi' =>'required',
            'deskripsi_detail' =>'required',
            'alamat' =>'required',
            'email' =>'required',
            'notelpon' =>'required',
        ],[
            'judul_akademi' =>'harus diisi',
            'deskripsi_akademi' =>'harus diisi',
            'deskripsi_detail' =>'harus diisi',
            'alamat' =>'harus diisi',
            'email' =>'harus diisi',
            'notelpon' =>'harus diisi',

        ]);
        $data = Akademi::find($id);
        $data->update([
            'judul_akademi' =>$request->judul_akademi,
            'deskripsi_akademi' =>$request->deskripsi_akademi,
            'deskripsi_detail' =>$request->deskripsi_detail,
            'alamat' =>$request->alamat,
            'email' =>$request->email,
            'notelpon' =>$request->notelpon,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('dataakademi')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Akademi::find($id);
        $data->delete();
        return redirect('dataakademi')->with('success',' Data Berhasil di Hapus!');
    }
}
