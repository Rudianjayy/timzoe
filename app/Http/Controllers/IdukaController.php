<?php

namespace App\Http\Controllers;

use App\Models\Iduka;
use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Fotoiduka;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;
use App\Models\footeerdua;

class IdukaController extends Controller
{
    public function index(){
        $i = Iduka::all();
        $fotoiduka = Fotoiduka::all();
        $kh = Jurusan::all();
        $personal = Personaljurusan::all();
        $ft = footeer::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('iduka.iduka', compact('i','fotoiduka','kh','personal','ft','logo','link'));
    }
    public function indexadmin() {
        $data = Iduka::all();
        return view('iduka.admin.iduka-admin', compact('data'));
    }
    public function tambahiduka()
    {
        return view('iduka.admin.tambah-iduka');
    }

    public function idukaproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul_iduka' =>'required',
            'deskripsi_iduka' =>'required',
        ],[
            'judul_iduka.required' =>'Harus diisi',
            'deskripsi_iduka.required' =>'Harus diisi',

        ]);
        $data = Iduka::create([
            'judul_iduka' =>$request->judul_iduka,
            'deskripsi_iduka' =>$request->deskripsi_iduka,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect()->route('idukaadmin')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editiduka($id){

        $data = Iduka::findOrFail($id);
        return view('iduka.admin.edit-iduka', compact('data'));
    }

    public function editproses3(Request $request, $id){
        $this->validate($request,[
            'judul_iduka' =>'required',
            'deskripsi_iduka' =>'required',
        ],[
            'judul_iduka' =>'harus diisi',
            'deskripsi_iduka' =>'harus diisi',

        ]);
        $data = Iduka::find($id);
        $data->update([
            'judul_iduka' =>$request->judul_iduka,
            'deskripsi_iduka' =>$request->deskripsi_iduka,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('idukaadmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Iduka::find($id);
        $data->delete();
        return redirect('idukaadmin')->with('success',' Data Berhasil di Hapus!');
    }














    //FOTOOOOO MOUUU


}
