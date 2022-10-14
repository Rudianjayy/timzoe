<?php

namespace App\Http\Controllers;

use App\Models\ekstrakulikuler;
use App\Models\Personaljurusan;
use Illuminate\Http\Request;
use App\Models\Detailekstrakulikuler;
use App\Models\footeer;

class DetailEkstrakulikulerController extends Controller
{
    public function detailekstrakulikuler($id){
        $data= Detailekstrakulikuler::where('ekstrakulikulers_id',$id)->firstOrFail();
        $foto= Detailekstrakulikuler::where('ekstrakulikulers_id',$id)->paginate(2);
        $personal = Personaljurusan::all();
        $ekstrakulikuler = ekstrakulikuler::all();
        $ft = footeer::all();
        $logo = footeer::all();
        return view('ekstrakulikuler.detail.detailekstrakulikuler', compact('data','ekstrakulikuler','foto','personal','ft','logo'));
    }
    public function loby1(){
        $data = Detailekstrakulikuler::with('ekstrakulikuler')->get();
        return view('ekstrakulikuler.detail.admindetailekstrakulikuler', compact('data'));
    }

    public function tambahdetailekstrakulikuler(){
        $ekstrakulikuler = ekstrakulikuler::all();
        return view('ekstrakulikuler.detail.tambah-admin-detailekstrakulikuler', compact('ekstrakulikuler'));
    }

    public function tambahdetail1(Request $request){
        $this->validate($request,[
            'ekstrakulikulers_id' =>'required',
            'deskripsi_detail' =>'required',
        ],[
            'ekstrakulikulers_id.required' =>'Harus diisi',
            'deskripsi_detail.required' =>'Harus diisi',

        ]);
        $data = Detailekstrakulikuler::create([
            'foto' =>$request->foto,
            'ekstrakulikulers_id' =>$request->ekstrakulikulers_id,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admindetailekstrakulikuler')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
    public function editdetailekstrakulikuler($id){

        $data = Detailekstrakulikuler::findOrFail($id);
        return view('ekstrakulikuler.edit-admin-detailekstrakulikuler', compact('data'));
    }

    public function editdetail1(Request $request, $id){
        $this->validate($request,[
            'ekstrakulikulers_id' =>'required',
            'deskripsi_detail' =>'required',
        ],[
            'ekstrakulikulers_id' =>'harus diisi',
            'deskripsi_detail' =>'harus diisi',

        ]);
        $data = Detailekstrakulikuler::find($id);
        $data->update([
            'ekstrakulikulers_id' =>$request->ekstrakulikulers_id,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('admindetailekstrakulikuler')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Detailekstrakulikuler::find($id);
        $data->delete();
        return redirect('admindetailekstrakulikuler')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
