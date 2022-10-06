<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Fotoiduka;
use Illuminate\Http\Request;

class FotoidukaController extends Controller
{
    public function mouadmin() {
        $fotoiduka = Fotoiduka::all();
        $data = Fotoiduka::all();
        $f = Muhinews::all();
        $kh = Jurusan::all();
        return view('iduka.fotomou.foto-mou-admin', compact('data','fotoiduka','f','kh'));
    }
    public function tambahfotomou()
    {
        return view('iduka.fotomou.tambah-foto');
    }

    public function fotomouproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_iduka' =>'required',
            'foto_iduka' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',

            'jurusan_mou' =>'required',

        ],[
            'foto_iduka.required' =>'Harus diisi',
            'foto_iduka.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

            'jurusan_mou.required' =>'Harus diisi',


        ]);
        $data = Fotoiduka::create([
            'foto_iduka' =>$request->foto_iduka,
            'jurusan_mou' =>$request->jurusan_mou,
        ]);
        if($request->hasFile('foto_iduka')){
            $request->file('foto_iduka')->move('fotomahasiswa/', $request->file('foto_iduka')->getClientOriginalName());
            $data->foto_iduka = $request->file('foto_iduka')->getClientOriginalName();
            $data->save();
        }



        return redirect()->route('mouadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editfotomou($id){

        $data = Fotoiduka::findOrFail($id);
        return view('iduka.fotomou.edit-mou', compact('data'));
    }

    public function editproses4(Request $request, $id){
        // $this->validate($request,[
        //     'foto_tkj' =>'required',
        //     'foto_mm' =>'required',
        //     'foto_ak' =>'required',
        //     'foto_otkp' =>'required',
        //     'foto_bd' =>'required',
        //     'foto_ph' =>'required',
        // ],[
        //     'foto_tkj.required' =>'Harus diisi',
        //     'foto_mm.required' =>'Harus diisi',
        //     'foto_ak.required' =>'Harus diisi',
        //     'foto_otkp.required' =>'Harus diisi',
        //     'foto_bd.required' =>'Harus diisi',
        //     'foto_ph.required' =>'Harus diisi',

        // ]);
        $data = Fotoiduka::find($id);
        $data->update([
            // 'judul_iduka' =>$request->judul_iduka,
            // 'deskripsi_iduka' =>$request->deskripsi_iduka,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('mouadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Fotoiduka::find($id);
        $data->delete();
        return redirect('mouadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
