<?php

namespace App\Http\Controllers;

use App\Models\kurikulum;
use App\Models\Muhinews;
use App\Models\kalenderakademik;
use App\Models\footeer;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{

    public function kalenderakademik(){
        $d = kalenderakademik::all();
        $f = Muhinews::all();
        $ft = footeer::all();
        return view('kurikulum.kalenderakademik', compact('d','f','ft'));
    }
   
    public function kalenderakademikadmin() {
        $data = kalenderakademik::all();
        return view('kurikulum.kalenderakademik-admin', compact('data'));
    }
    public function tambahkalenderakademik()
    {
        return view('kurikulum.tambahkalenderakademik');
    }

    public function kalenderakademikproses9(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
        ]);
        $data = kalenderakademik::create([
            'foto' =>$request->foto,
            ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kalenderakademikadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editkalenderakademik($id){

        $data = kalenderakademik::findOrFail($id);
        return view('kurikulum..editkalenderakademik', compact('data'));
    }

    public function editproses9(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
        ]);
        $data = kalenderakademik::find($id);
        $data->update([
          
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('kalenderakademikadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = kalenderakademik::find($id);
        $data->delete();
        return redirect('kalenderakademikadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }













    public function jadwalkegiatan(){
        $f = Muhinews::all();
        return view('kurikulum.jadwalkegiatan', compact('f'));
    }



    public function kurikulumadmin(){
        $data = Kurikulum::all();
        return view('kurikulum.k.kurikulum-admin', compact('data'));
    }
    public function tambahkurikulum(){
        return view('kurikulum.k.tambah-kurikulum');
    }
    public function kurikulumproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul' =>'required',
            'deskripsi_k' =>'required',

            'foto1' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'penjelasan1' =>'required',

            'foto2' =>'required',
            'penjelasan2' =>'required',

            'foto3' =>'required',
            'penjelasan3' =>'required',

            'foto4' =>'required',
            'penjelasan4' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'deskripsi_k.required' =>'Harus diisi',

            'foto1.required' =>'Harus diisi',
            'foto1.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'penjelasan1.required' =>'required',

            'foto2.required' =>'Haruds diisi',
            'penjelasan2.required' =>'Haruds diisi',

            'foto3.required' =>'Haruds diisi',
            'penjelasan3.required' =>'Haruds diisi',

            'foto4.required' =>'Haruds diisi',
            'penjelasan4.required' =>'Haruds diisi',

        ]);
        $data = Kurikulum::create([
            'judul' =>$request->judul,
            'deskripsi_k' =>$request->deskripsi_k,
            'foto1' =>$request->foto1,
            'penjelasan1' =>$request->penjelasan1,

            'foto2' =>$request->foto2,
            'penjelasan2' =>$request->penjelasan2,

            'foto3' =>$request->foto3,
            'penjelasan3' =>$request->penjelasan3,

            'foto4' =>$request->foto4,
            'penjelasan4' =>$request->penjelasan4,

        ]);
        if($request->hasFile('foto1')){
            $request->file('foto1')->move('fotomahasiswa/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto2')){
            $request->file('foto2')->move('fotomahasiswa/', $request->file('foto2')->getClientOriginalName());
            $data->foto2 = $request->file('foto2')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto3')){
            $request->file('foto3')->move('fotomahasiswa/', $request->file('foto3')->getClientOriginalName());
            $data->foto3 = $request->file('foto3')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto4')){
            $request->file('foto4')->move('fotomahasiswa/', $request->file('foto4')->getClientOriginalName());
            $data->foto4 = $request->file('foto4')->getClientOriginalName();
            $data->save();
        }



        return redirect()->route('kurikulumadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
}
