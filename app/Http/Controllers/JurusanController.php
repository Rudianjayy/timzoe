<?php

namespace App\Http\Controllers;

use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;

class JurusanController extends Controller
{


    public function detailjurusan($id){
        $data = Jurusan::findOrFail($id);
        return view('kurikulum.kompetensi.detailjurusan',compact('data'));
    }

    public function loby3(){
        $data = Jurusan::all();
        $f = Muhinews::all();
        $kh = Jurusan::all();
        return view ('kurikulum.kompetensi.admin-jurusan',compact('data','f','kh'));
    }
    public function indexjurusan($id){
        $data = Jurusan::findOrFail($id);
        $jurusan = Jurusan::all();
        $f = Muhinews::all();
        // $gambar = DB::table('s's)->where('nama_jurusan',);
        $personal = Personaljurusan::all();
        $kh = Jurusan::all();
        $pj = Personaljurusan::all();
        $ft = footeer::all();
        $logo = footeer::all();

        return view ('kurikulum.kompetensi.jurusan',compact('data','ft','personal','kh','pj','f','logo'));
    }

    public function tambahjurusan()
    {
        $personal = Personaljurusan::all();
        
        return view('kurikulum.kompetensi.tambah-jurusan', compact('personal'));
    }

    public function submitdata3(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'nama_kompetensi2' =>'required',
            'deskripsi_kompetensi2' =>'required',
            'deskripsi_detail2' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'nama_kompetensi2.required' =>'Harus diisi',
            'deskripsi_kompetensi2.required' =>'Harus diisi',
            'deskripsi_detail2.required' =>'Harus diisi',

        ]);
        $data = Jurusan::create([
            'foto' =>$request->foto,
            'nama_kompetensi2' =>$request->nama_kompetensi2,
            'deskripsi_kompetensi2' =>$request->deskripsi_kompetensi2,
            'deskripsi_detail2' =>$request->deskripsi_detail2,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotojurusan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('datajurusan')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }

    public function editjurusan($id){

        $data = Jurusan::findOrFail($id);
        $personal = Personaljurusan::all();
        return view('kurikulum.kompetensi.edit-jurusan', compact('data','personal'));
    }

    public function submitedit3(Request $request, $id){
        // dd('aaa');
        $this->validate($request,[
            'nama_kompetensi2' =>'required',
            'deskripsi_kompetensi2' =>'required',
            'deskripsi_detail2' =>'required',
        ],[
            'nama_kompetensi2.required' =>'Harus diisi',
            'deskripsi_kompetensi2.required' =>'Harus diisi',
            'deskripsi_ddetail2.required' =>'Harus diisi',

        ]);
        $data = Jurusan::find($id);
        $data->update([
            'nama_kompetensi2' =>$request->nama_kompetensi2,
            'deskripsi_kompetensi2' =>$request->deskripsi_kompetensi2,
            'deskripsi_detail2' =>$request->deskripsi_detail2,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('datajurusan')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Jurusan::find($id);
        $data->delete();
        return redirect('datajurusan')->with('toast_success',' Data Berhasil di Hapus!');
    }

}
