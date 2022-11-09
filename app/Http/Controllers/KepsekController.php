<?php

namespace App\Http\Controllers;

use App\Models\Kepsek;
use App\Models\Jurusan;
use App\Models\Sambutan;
use Illuminate\Http\Request;
use App\Models\Sambutankepsek;

class KepsekController extends Controller
{
    public function sambutanadmin(){
        $data = Sambutan::all();
        $kh = Jurusan::all();
        return view('kepsek.kepsek', compact('data','kh'));
    }
    public function tambahsambutan()
    {
        return view('kepsek.tambah-sambutan');
    }

    public function tambahsambutanproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'sambutan' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'sambutan.required' =>'Harus diisi',

        ]);
        $data = Sambutan::create([
            'foto' =>$request->foto,
            'sambutan' =>$request->sambutan,
        ]);
        if($request->hasFile('foto_kepsek')){
            $request->file('foto_kepsek')->move('fotomahasiswa/', $request->file('foto_kepsek')->getClientOriginalName());
            $data->foto_kepsek = $request->file('foto_kepsek')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('data-album')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    public function editsambutan($id){

        $data = Sambutan::findOrFail($id);
        return view('kepsek.edit-Kepsek', compact('data'));
    }

    public function editprosessambutan(Request $request, $id){
        // dd('aaa');
        $this->validate($request, [
            'sambutan' =>'required',
        ],[
            'sambutan.required' => 'harus diisi',
        ]);
        $data = Sambutan::find($id);
        $data->update([
            'sambutan' =>$request->sambutan,

        ]);
        if($request->hasFile('foto_kepsek')){
            $request->file('foto_kepsek')->move('fotomahasiswa/', $request->file('foto_kepsek')->getClientOriginalName());
            $data->foto_kepsek = $request->file('foto_kepsek')->getClientOriginalName();
            $data->save();
        }

        return redirect('sambutanadmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Sambutan::find($id);
        $data->delete();
        return redirect('sambutanadmin')->with('success',' Data Berhasil di Hapus!');
    }
}
