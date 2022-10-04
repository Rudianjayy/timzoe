<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function sambutanadmin(){
        $data = Sambutan::all();
        return view ('kepsek.kepsek',compact('data'));
    }

    public function tambahsambutan()
    {
        return view('kepsek.tambah-sambutan');
    }

    public function tambahsambutanproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            // 'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi' =>'required',
        ],[
            // 'foto.required' =>'Harus diisi',
            // 'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = Sambutan::create([
            'foto' =>$request->foto,
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('sambutanadmin')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }

    public function editsambutan($id){

        $data = Sambutan::findOrFail($id);
        return view('kepsek.edit-sambutan', compact('data'));
    }

    public function proseseditsambutan(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi' =>'harus diisi',

        ]);
        $data = Sambutan::find($id);
        $data->update([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('sambutanadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Sambutan::find($id);
        $data->delete();
        return redirect('sambutanadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
