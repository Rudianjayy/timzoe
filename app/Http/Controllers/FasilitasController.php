<?php

namespace App\Http\Controllers;

use App\Models\fasilitassekolah;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function fasilitassekolah(){
        $q = fasilitassekolah::paginate(6);
        $f = Muhinews::paginate(3);
        return view('fasilitassekolah.fasilitassekolah', compact('q','f'));
    }
    public function fasilitasadmin(){
        $data = fasilitassekolah::all();
        return view('fasilitassekolah.crudfasilitassekolah.fasilitasadmin',compact('data'));
    }
    public function tambahfasilitas()
    {
        return view('fasilitassekolah.crudfasilitassekolah.tambahfasilitas');
    }

    public function prosesfasilitas(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_fasilitas' =>'required',
            'deskripsi' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_fasilitas.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = fasilitassekolah::create([
            'foto' =>$request->foto,
            'judul_fasilitas' =>$request->judul_fasilitas,
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('fasilitasadmin')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }

    public function editfasilitas($id){

        $data = fasilitassekolah::findOrFail($id);
        return view('fasilitassekolah.crudfasilitassekolah.editfasilitas', compact('data'));
    }

    public function editprosesfasilitas(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_fasilitas' =>'required',
            'deskripsi' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_fasilitas' =>'harus diisi',
            'deskripsi' =>'harus diisi',

        ]);
        $data = fasilitassekolah::find($id);
        $data->update([
            'judul_fasilitas' =>$request->judul_fasilitas,
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('fasilitasadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = fasilitassekolah::find($id);
        $data->delete();
        return redirect('fasilitasadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
