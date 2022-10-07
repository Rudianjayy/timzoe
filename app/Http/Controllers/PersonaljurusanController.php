<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;

class PersonaljurusanController extends Controller
{
    public function loby4(){
        $data = Personaljurusan::all();
        $f = Muhinews::all();
        $kh = Jurusan::all();
        return view ('kurikulum.fotojurusan.foto-jurusan',compact('data','f','kh'));
    }
    // public function indexfotojurusan($id){
    //     $data=Personaljurusan::findOrFail($id);
    //     $f = Muhinews::all();
    //     return view ('kurikulum.kompetensi.fotojurusan.foto-jurusan',compact('data','f'));
    // }

    public function tambahfotojurusan()
    {
        return view('kurikulum.fotojurusan.tambah-foto-jurusan');
    }

    public function submitdata4(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'nama_jurusan' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'nama_jurusan.required' =>'Harus diisi',

        ]);
        $data = Personaljurusan::create([
            'foto' =>$request->foto,
            'nama_jurusan' =>$request->nama_jurusan,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotojurusan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminfotojurusan')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }
    public function delete($id){
        $data = Personaljurusan::find($id);
        $data->delete();
        return redirect('adminfotojurusan')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
