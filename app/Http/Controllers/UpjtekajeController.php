<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upjtentangkami;

class UpjtekajeController extends Controller
{

    public function upj() {
        $tentangg = Upjtentangkami::all();
        return view('upj.upj', compact('tentangg'));
    }



    public function loby13() {
        $data = Upjtentangkami::all();
        return view('upjtekaje.tentangkami.tentang-kami', compact('data'));
    }
    public function tambahtentangkami()
    {
        return view('upjtekaje.tentangkami.tambah-tentang-kami');
    }

    public function submitdata13(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_tentangkami' =>'required',
        ],[
            'deskripsi_tentangkami.required' =>'Harus diisi',

        ]);
        $data = Upjtentangkami::create([
            'deskripsi_tentangkami' =>$request->deskripsi_tentangkami,
            'foto_tentangkami' =>$request->foto_tentangkami,

        ]);
        if($request->hasFile('foto_tentangkami')){
            $request->file('foto_tentangkami')->move('fotomahasiswa/', $request->file('foto_tentangkami')->getClientOriginalName());
            $data->foto_tentangkami = $request->file('foto_tentangkami')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('tentangkami')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function edittentangkami($id){

        $data = Upjtentangkami::findOrFail($id);
        return view('upjtekaje.tentangkami.edit-tentang-kami', compact('data'));
    }

    public function submitedit13(Request $request, $id){
        $this->validate($request,[
            'deskripsi_tentangkami' =>'required',
        ],[
            'deskripsi_tentangkami' =>'harus diisi',

        ]);
        $data = Upjtentangkami::find($id);
        $data->update([
            'deskripsi_tentangkami' =>$request->deskripsi_tentangkami,
        ]);
        if($request->hasFile('foto_tentangkami')){
            $request->file('foto_tentangkami')->move('fotomahasiswa/',$request->file('foto_tentangkami')->getClientOriginalName());
            $data->foto_tentangkami = $request->file('foto_tentangkami')->getClientOriginalName();
            $data->save();
        }

        return redirect('tentangkami')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletetentangkami($id){
        $data = Upjtentangkami::find($id);
        $data->delete();
        return redirect('tentangkami')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
