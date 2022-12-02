<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function loby(){
        $data = Album::all();
        $f = Muhinews::paginate(4);
        $kh = Jurusan::all();
        return view ('album.data-album',compact('data','f','kh'));
    }

    public function tambahalbum()
    {
        return view('album.tambah-album');
    }

    public function albumproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_album' =>'required',
            'deskripsi' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_album.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = Album::create([
            'foto' =>$request->foto,
            'judul_album' =>$request->judul_album,
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('data-album')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    public function editalbum($id){

        $data = Album::findOrFail($id);
        return view('album.edit-album', compact('data'));
    }

    public function editproses(Request $request, $id){
        // dd('aaa');
        $this->validate($request,[
            // 'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            // 'judul_album' =>'required',
            'deskripsi' =>'required',
        ],[
            // 'foto.required' =>'Harus diisi',
            // 'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            // 'judul_album.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = Album::find($id);
        $data->update([
            // 'judul_album' =>$request->judul_album,
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('data-album')->with('success',' Data Berhasil di Ubah!');

    }

    public function deletealbum($id){
        $data = Album::find($id);
        $data->delete();
        return redirect('data-album')->with('success',' Data Berhasil di Hapus!');
    }

}
