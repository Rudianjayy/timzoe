<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\Fotokompetensi;

class FotokompetensiController extends Controller
{
    public function fotokompetensiadmin() {
        $data = Fotokompetensi::all();
        $f = Muhinews::all();
        $foto = Fotokompetensi::all();
        $kh = Jurusan::all();
        return view('kurikulum.fotokompetensi.foto-kompetensi', compact('data','foto','f','kh'));
    }
    public function tambahfotokompetensi()
    {
        return view('kurikulum.fotokompetensi.tambah-foto-kompetensi');
    }

    public function fotokompetensiproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'fotokompetensi' =>'required',
        ],[
            'fotokompetensi.required' =>'Harus diisi',

        ]);
        $data = Fotokompetensi::create([
            'fotokompetensi' =>$request->fotokompetensi,
        ]);
        if($request->hasFile('fotokompetensi')){
            $request->file('fotokompetensi')->move('fotomahasiswa/', $request->file('fotokompetensi')->getClientOriginalName());
            $data->fotokompetensi = $request->file('fotokompetensi')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('fotokompetensiadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editfotokompetensi($id){

        $data = Fotokompetensi::findOrFail($id);
        return view('kurikulum.fotokompetensi.edit-foto-kompetensi', compact('data'));
    }

    public function editprosesfotokompetensi(Request $request, $id){
        // $this->validate($request,[
        //     'fotokompetensi' =>'required',
        // ],[
        //     'fotokompetensi' =>'harus diisi',

        // ]);
        $data = Fotokompetensi::find($id);
        $data->update([
            // 'fotokompetensi' =>$request->fotokompetensi,
        ]);
        if($request->hasFile('fotokompetensi')){
            $request->file('fotokompetensi')->move('fotomahasiswa/',$request->file('fotokompetensi')->getClientOriginalName());
            $data->fotokompetensi = $request->file('fotokompetensi')->getClientOriginalName();
            $data->save();
        }

        return redirect('fotokompetensiadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Fotokompetensi::find($id);
        $data->delete();
        return redirect('fotokompetensiadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
