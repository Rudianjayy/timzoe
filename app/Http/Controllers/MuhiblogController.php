<?php

namespace App\Http\Controllers;

use App\Models\Muhiblog;
use App\Models\Muhinews;
use App\Models\Personaljurusan;
use App\Models\footeer;
use App\Models\Kategoriberita;
use Illuminate\Http\Request;

class MuhiblogController extends Controller
{
    public function muhiblog($id)
    {
        $blog =Muhinews::findOrFail($id);
        $d = Muhinews::paginate(3);
        $personal = Personaljurusan::all();
        $logo = footeer::all();
        $kategori = Kategoriberita::all();
        return view('muhinews.muhiblog',compact('d','blog','personal','logo','kategori'));
    }
    public function kategoriberita() {
        $data = Kategoriberita::all();
        return view('muhinews.admin.kategori.kategoriberita', compact('data'));
    }
    public function tambahkategori()
    {
        return view('muhinews.admin.kategori.tambahkategori');
    }

    public function kategoriproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'kategori' =>'required',
        ],[
            'kategori.required' =>'Harus diisi',

        ]);
        $data = Kategoriberita::create([
            'kategori' =>$request->kategori,
        ]);
        return redirect()->route('kategoriberita')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editkategori($id){

        $data = Kategoriberita::findOrFail($id);
        return view('muhinews.admin.kategori.editkategori', compact('data'));
    }

    public function editproseskategori(Request $request, $id){
        $this->validate($request,[
            'kategori' =>'required',
        ],[
            'kategori.required' =>'Harus diisi',
        ]);
        $data = Kategoriberita::find($id);
        $data->update([
            'kategori' =>$request->kategori,
        ]);

        return redirect('kategoriberita')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletekategori($id){
        $data = Kategoriberita::find($id);
        $data->delete();
        return redirect('kategoriberita')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
