<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;

class JurusanController extends Controller
{
    public function loby3(){
        $data = Jurusan::with('personal')->get();
        $f = Muhinews::all();
        $kh = Jurusan::all();
        return view ('kurikulum.kompetensi.admin-jurusan',compact('data','f','kh'));
    }
    public function indexjurusan($id){
        $data= Jurusan::where('personaljurusans_id',$id)->firstOrFail();
        $foto= Jurusan::where('personaljurusans_id',$id)->get();
        $f = Muhinews::all();
        // $gambar = DB::table('s's)->where('nama_jurusan',);
        $personal = Personaljurusan::all();
        $kh = Jurusan::all();
        $pj = Personaljurusan::all();

        return view ('kurikulum.kompetensi.jurusan',compact('data','f','personal','kh','foto','pj'));
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
            'personaljurusans_id' =>'required',
            'deskripsi' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'personaljurusans_id.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = Jurusan::create([
            'foto' =>$request->foto,
            'personaljurusans_id' =>$request->personaljurusans_id,
            'deskripsi' =>$request->deskripsi,
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
            'personaljurusans_id' =>'required',
            'deskripsi' =>'required',
        ],[
            'personaljurusans_id.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = Jurusan::find($id);
        $data->update([
            'personaljurusans_id' =>$request->personaljurusans_id,
            'deskripsi' =>$request->deskripsi,
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
        return redirect('datajurusan')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
