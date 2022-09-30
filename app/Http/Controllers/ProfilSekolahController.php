<?php

namespace App\Http\Controllers;

use App\Models\profilsekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    public function profilsekolah(){
        $q = profilsekolah::all();
        return view('profilsekolah.profilsekolah',compact('q'));
    }
    public function visimisi(){
        return view('profilsekolah.visimisi ');
    }
    public function profilsekolahadmin(){
        $data = profilsekolah::all();
        return view('profilsekolah.crudprofilsekolah.profilsekolahadmin',compact('data'));
    }
    public function tambahprofilsekolah()
    {
        return view('profilsekolah.crudprofilsekolah.tambahprofilsekolah');
    }

    public function prosesprofilsekolah(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_lanjutan' =>'required',
            'foto_simuhi' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_simuhi' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_lanjutan.required' =>'Harus diisi',
            'foto_simuhi.required' =>'Harus diisi',
            'foto_simuhi.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_simuhi' =>'Harus diisi',

        ]);
        $data = profilsekolah::create([
            'judul' =>$request->judul,
            'deskripsi' =>$request->deskripsi,
            'foto' =>$request->foto,
            'deskripsi_lanjutan' =>$request->deskripsi_lanjutan,
            'foto_simuhi' =>$request->foto_simuhi,
            'deskripsi_simuhi' =>$request->deskripsi_simuhi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('foto_simuhi')){
            $request->file('foto_simuhi')->move('fotomahasiswa/', $request->file('foto_simuhi')->getClientOriginalName());
            $data->foto_simuhi = $request->file('foto_simuhi')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('profilsekolahadmin')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }

    public function editprofilsekolah($id){

        $data = profilsekolah::findOrFail($id);
        return view('profilsekolah.crudprofilsekolah.editprofilsekolah', compact('data'));
    }

    public function editprosesidentitas(Request $request, $id){
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_lanjutan' =>'required',
            'foto_simuhi' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_simuhi' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_lanjutan.required' =>'Harus diisi',
            'foto_simuhi.required' =>'Harus diisi',
            'foto_simuhi.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_simuhi' =>'Harus diisi',

        ]);
        $data = profilsekolah::find($id);
        $data->update([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('profilsekolahadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = profilsekolah::find($id);
        $data->delete();
        return redirect('profilsekolahadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }

}