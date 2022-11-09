<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function indexprestasi(){
        $data = Prestasi::all();
        return view('prestasi.prestasi',compact('data'));
    }
    public function tambahprestasi()
    {
        return view('prestasi.tambah-prestasi');
    }

    public function submitdata5(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_prestasi' =>'required',
            'deskripsi_prestasi' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_prestasi.required' =>'Harus diisi',
            'deskripsi_prestasi.required' =>'Harus diisi',

        ]);
        $data = Prestasi::create([
            'foto' =>$request->foto,
            'judul_prestasi' =>$request->judul_prestasi,
            'deskripsi_prestasi' =>$request->deskripsi_prestasi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexprestasi')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    public function editprestasi($id){

        $data = Prestasi::findOrFail($id);
        return view('prestasi.edit-prestasi', compact('data'));
    }

    public function submitedit5(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_prestasi' =>'required',
            'deskripsi_prestasi' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_prestasi' =>'harus diisi',
            'deskripsi_prestasi' =>'harus diisi',

        ]);
        $data = Prestasi::find($id);
        $data->update([
            'judul_prestasi' =>$request->judul_prestasi,
            'deskripsi_prestasi' =>$request->deskripsi_prestasi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('indexprestasi')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Prestasi::find($id);
        $data->delete();
        return redirect('indexprestasi')->with('success',' Data Berhasil di Hapus!');
    }
}
