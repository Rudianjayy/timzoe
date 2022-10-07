<?php

namespace App\Http\Controllers;

use App\Models\IdentitasSekolah;
use App\Models\Muhinews;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class IdentitasSekolahController extends Controller
{
    public function identitassekolah(){
        $i = identitassekolah::all();
        $f = Muhinews::paginate(4);
        $kh = Jurusan::all();
        return view('identitassekolah.identitas_sekolah',compact('i','f','kh'));
    }
    public function identitassekolahadmin()
    {
        $data = IdentitasSekolah::all();
        return view('identitassekolah.admin.identitas_admin',compact('data'));
    }
    public function tambahidentitas()
    {
        return view('identitassekolah.admin.tambahidentitas');
    }
    public function identitasproses(Request $request){
        // dd($request->all());
        // $this->validate($request,[
        //     'namasekolah' =>'required',
        //     'npsn' =>'required',
        //     'alamat' =>'required',
        //     'kecamatan' =>'required',
        //     'kabupaten ' =>'required',
        //     'provinsi' =>'required',
        //     'kodepos' =>'required',
        //     'telepon' =>'required',
        //     'fax' =>'required',
        //     'email' =>'required',
        //     'facebook' =>'required',
        //     'instagram' =>'required',
        //     'youtube' =>'required',
        // ],[
        //     'namasekolah.required' =>'Harus diisi',
        //     'npsn.required' =>'Harus diisi',
        //     'alamat.required' =>'Harus diisi',
        //     'kecamatan.required' =>'Harus diisi',
        //     'kabupaten.required' =>'Harus diisi',
        //     'provinsi.required' =>'Harus diisi',
        //     'kodepos.required' =>'Harus diisi',
        //     'telepon.required' =>'Harus diisi',
        //     'fax.required' =>'Harus diisi',
        //     'email.required' =>'Harus diisi',
        //     'facebook.required' =>'Harus diisi',
        //     'instagram.required' =>'Harus diisi',
        //     'youtube.required' =>'Harus diisi',

        // ]);
        $data = IdentitasSekolah::create([
            'namasekolah' =>$request->namasekolah,
            'npsn' =>$request->npsn,
            'alamat' =>$request->alamat,
            'kecamatan' =>$request->kecamatan,
            'kabupaten' =>$request->kabupaten,
            'provinsi' =>$request->provinsi,
            'kodepos' =>$request->kodepos,
            'telepon' =>$request->telepon,
            'fax' =>$request->fax,
            'email' =>$request->email,
            'facebook' =>$request->facebook,
            'instagram' =>$request->instagram,
            'youtube' =>$request->youtube,
        ]);



     return redirect('identitas_admin')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }

    public function editidentitas($id){

        $data = IdentitasSekolah::findOrFail($id);
        return view('identitassekolah.admin.editidentitas', compact('data'));
    }

    public function editprosesidentitas(Request $request, $id){
        $data = IdentitasSekolah::find($id);
        $data->update([
            'namasekolah' =>$request->namasekolah,
            'npsn' =>$request->npsn,
            'alamat' =>$request->alamat,
            'kecamatan' =>$request->kecamatan,
            'kabupaten' =>$request->kabupaten,
            'provinsi' =>$request->provinsi,
            'kodepos' =>$request->kodepos,
            'telepon' =>$request->telepon,
            'fax' =>$request->fax,
            'email' =>$request->email,
            'facebook' =>$request->facebook,
            'instagram' =>$request->instagram,
            'youtube' =>$request->youtube,
        ]);

        return redirect('identitas_admin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = IdentitasSekolah::find($id);
        $data->delete();
        return redirect('identitas_admin')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
