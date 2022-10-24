<?php

namespace App\Http\Controllers;

use App\Models\ekstrakulikuler;
use Illuminate\Http\Request;
use App\Models\DetailEkstrakulikuler;
use App\Models\footeer;
use App\Models\Personaljurusan;
use App\Models\footeerdua;
use App\Models\Muhinews;

class DetailEkstrakulikulerController extends Controller
{
    public function detailekstrakulikuler($id) {
        // $data= Detailekstrakulikuler::where('ekstrakulikulers_id',$id)->firstOrFail();
        // $foto= Detailekstrakulikuler::where('ekstrakulikulers_id',$id)->get();
        $detail = ekstrakulikuler::findOrFail($id);
        $d = Muhinews::paginate(3);
        $data= Detailekstrakulikuler::all();
        $foto= Detailekstrakulikuler::all();
        $personal = Personaljurusan::all();
        // $akademi = akademi::all();
        $ft = footeer::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        // $data = ekstrakulikuler::all();
        // $ft = footeer::all();
        // $logo = footeer::all();
        // $personal = Personaljurusan::all();
        return view('kesiswaan.ekstrakulikuler.detail.detailekstrakulikuler',compact('data','foto','personal','ft','logo','link','detail','d'));

    }
    public function admindetailekstrakulikuler(){
        $data = detailekstrakulikuler::all();
        return view('kesiswaan.ekstrakulikuler.detail.admindetailekstrakulikuler', compact('data'));
    }

    public function tambahdetailekstrakulikuler(){
        $ekstrakulikuler = ekstrakulikuler::all();
        return view('kesiswaan.ekstrakulikuler.detail.tambahdetailekstrakulikuler', compact('ekstrakulikuler'));
    }

    public function tambahdetail1(Request $request){
        $this->validate($request,[
            'judul_ekstra' =>'required',
            'deskripsi_ekstrakulikuler' =>'required',
        ],[
            'judul_ekstra.required' =>'Harus diisi',
            'deskripsi_ekstrakulikuler.required' =>'Harus diisi',

        ]);
        $data = DetailEkstrakulikuler::create([
            'foto' =>$request->foto,
            'ekstrakulikulers_id' => $request->judul_ekstra,
            'nama_ekstrakulikuler' => '',
            'deskripsi_ekstrakulikuler' =>$request->deskripsi_ekstrakulikuler,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admindetailekstrakulikuler')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
    public function editdetailekstrakulikuler($id){

        $data = DetailEkstrakulikuler::findOrFail($id);
        return view('kesiswaan.ekstrakulikuler.detail.editdetailekstrakulikuler', compact('data'));
    }

    public function editdetail1(Request $request, $id){
        $this->validate($request,[
            'nama_ekstrakulikuler' =>'required',
            'deskripsi_ekstrakulikuler' =>'required',
        ],[
            'nama_ekstrakulikuler' =>'harus diisi',
            'deskripsi_ekstrakulikuler' =>'harus diisi',

        ]);
        $data = DetailEkstrakulikuler::find($id);
        $data->update([
            'nama_ekstrakulikuler' =>$request->nama_ekstrakulikuler,
            'deskripsi_ekstrakulikuler' =>$request->deskripsi_ekstrakulikuler,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('admindetailekstrakulikuler')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletedetail($id){
        $data = Detailekstrakulikuler::find($id);
        $data->delete();
        return redirect('admindetailekstrakulikuler')->with('toast_error',' Data Berhasil di Hapus!');
    }










//Ekstrablog//







}
