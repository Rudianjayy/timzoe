<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class MuhinewsController extends Controller
{
    public function index() {
        $k = Muhinews::paginate(6);
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        return view('muhinews.muhinews',compact('k','f','kh'));

    }
    public function indexadmin() {
        $data = Muhinews::all();
        return view('muhinews.admin.muhinews-admin', compact('data'));
    }
    public function tambahmuhinews()
    {
        return view('muhinews.admin.tambah-muhinews');
    }

    public function muhinewsproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul' =>'required',
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_muhinews' =>'required',
            'deskripsi_detail' =>'required',
            'Kategori' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_muhinews.required' =>'Harus diisi',
            'deskripsi_detail.required' =>'Harus diisi',
            'Kategori.required' =>'Harus diisi',

        ]);
        $data = Muhinews::create([
            'judul' =>$request->judul,
            'foto' =>$request->foto,
            'deskripsi_muhinews' =>$request->deskripsi_muhinews,
            'deskripsi_detail' =>$request->deskripsi_detail,
            'Kategori' =>$request->Kategori,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('muhinewsadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editmuhinews($id){

        $data = Muhinews::findOrFail($id);
        return view('muhinews.admin.edit-muhinews', compact('data'));
    }

    public function editproses2(Request $request, $id){
        $this->validate($request,[
            'judul' =>'required',
            'deskripsi_muhinews' =>'required',
            'deskripsi_detail' =>'required',
            'Kategori' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'deskripsi_muhinews.required' =>'Harus diisi',
            'Kategori.required' =>'Harus diisi',
        ]);
        $data = Muhinews::find($id);
        $data->update([
            'judul' =>$request->judul,
            'deskripsi_muhinews' =>$request->deskripsi_muhinews,
            'deskripsi_detail' =>$request->deskripsi_detail,
            'Kategori' =>$request->Kategori,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('muhinewsadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Muhinews::find($id);
        $data->delete();
        return redirect('muhinewsadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }


}
