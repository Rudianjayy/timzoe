<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function loby(){
        $data = Album::all();
        return view ('album.data-album',compact('data'));
    }

    public function tambahalbum()
    {
        return view('album.tambah-album');
    }

    public function albumproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = Album::create([
            'foto' =>$request->foto,
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('data-album')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editalbum($id){

        $data = Album::findOrFail($id);
        return view('album.edit-album', compact('data'));
    }

    public function editproses(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi' =>'harus diisi',

        ]);
        $data = Album::find($id);
        $data->update([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('data-album')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Album::find($id);
        $data->delete();
        return redirect('data-album')->with('success',' Data Berhasil di Hapus!');
    }

}
