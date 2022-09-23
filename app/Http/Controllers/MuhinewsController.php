<?php

namespace App\Http\Controllers;

use App\Models\Muhinews;
use Illuminate\Http\Request;

class MuhinewsController extends Controller
{
    public function index() {
        return view('muhinews.muhinews');
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
            'foto_muhinews' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_muhinews' =>'required',
        ],[
            'foto_muhinews.required' =>'Harus diisi',
            'foto_muhinews.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_muhinews.required' =>'Harus diisi',

        ]);
        $data = Muhinews::create([
            'foto_muhinews' =>$request->foto_muhinews,
            'deskripsi_muhinews' =>$request->deskripsi_muhinews,
        ]);
        if($request->hasFile('foto_muhinews')){
            $request->file('foto_muhinews')->move('fotomahasiswa/', $request->file('foto_muhinews')->getClientOriginalName());
            $data->foto = $request->file('foto_muhinews')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('muhinewsadmin')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editmuhinews($id){

        $data = Muhinews::findOrFail($id);
        return view('muhinews.admin.edit-muhinews', compact('data'));
    }

    public function editproses2(Request $request, $id){
        $this->validate($request,[
            'foto_muhinews' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_muhinews' =>'required',
        ],[
            'foto_muhinews.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_muhinews' =>'harus diisi',

        ]);
        $data = Muhinews::find($id);
        $data->update([
            'deskripsi_muhinews' =>$request->deskripsi_muhinews,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('muhinewsadmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Muhinews::find($id);
        $data->delete();
        return redirect('muhinewsadmin')->with('success',' Data Berhasil di Hapus!');
    }


}
