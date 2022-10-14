<?php

namespace App\Http\Controllers;

use App\Models\Akademi;
use App\Models\footeer;
use Illuminate\Http\Request;
use App\Models\Detailakademi;
use App\Models\Personaljurusan;

class DetailakademiController extends Controller
{
    public function detailakademi($id){
        $data= Detailakademi::where('akademis_id',$id)->firstOrFail();
        $foto= Detailakademi::where('akademis_id',$id)->paginate(2);
        $personal= Personaljurusan::all();
        $akademi = Akademi::all();
        $ft = footeer::all();
        return view('akademi.detail.detail-akademi', compact('data','akademi','foto','personal','ft'));
    }
    public function loby7(){
        $data = Detailakademi::with('akademi')->get();
        return view('akademi.detail.admin-detail-akademi', compact('data'));
    }

    public function tambahdetailakademi(){
        $akademi = Akademi::all();
        return view('akademi.detail.tambah-detail-akademi', compact('akademi'));
    }

    public function submitdata7(Request $request){
        $this->validate($request,[
            'akademis_id' =>'required',
            'deskripsi_detail' =>'required',
        ],[
            'akademis_id.required' =>'Harus diisi',
            'deskripsi_detail.required' =>'Harus diisi',

        ]);
        $data = Detailakademi::create([
            'foto' =>$request->foto,
            'akademis_id' =>$request->akademis_id,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admindetailakademi')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
    public function editdetailakademi($id){

        $data = Detailakademi::findOrFail($id);
        return view('akademi.detail.edit-detail-akademi', compact('data'));
    }

    public function submitedit7(Request $request, $id){
        $this->validate($request,[
            'akademis_id' =>'required',
            'deskripsi_detail' =>'required',
        ],[
            'akademis_id' =>'harus diisi',
            'deskripsi_detail' =>'harus diisi',

        ]);
        $data = Detailakademi::find($id);
        $data->update([
            'akademis_id' =>$request->akademis_id,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('admindetailakademi')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Detailakademi::find($id);
        $data->delete();
        return redirect('admindetailakademi')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
