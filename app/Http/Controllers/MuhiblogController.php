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
<<<<<<< HEAD
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
=======
        $kategori = Muhinews::all();
        return view('muhinews.muhiblog',compact('d','blog','kategori'));
<<<<<<< HEAD
    }
    public function muhiblogadmin()
    {
        $data = Muhiblog::all();
        return view('muhinews.adminmuhiblog.muhiblogadmin', compact('data'));
    }
    public function tambahmuhiblog()
    {
        $judulblog = Muhinews::all();
        return view('muhinews.adminmuhiblog.tambahmuhiblog',compact('judulblog'));
    }

    public function muhiblogproses(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'judul_blog' => 'required',
        //     'foto' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        //     'deskripsi_blog' => 'required',
        //     'muhinews_blog' => 'required',
        //     'kategori_blog' => 'required',
        // ], [
        //     'judul_blog.required' => 'Harus diisi',
        //     'foto.required' => 'Harus diisi',
        //     'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
        //     'deskripsi_blog.required' => 'Harus diisi',
        //     'muhinews_blog.required' => 'Harus diisi',
        //     'kategori_blog.required' => 'Harus diisi',

        // ]);
        $data = Muhiblog::create([
            'muhinews_id' => $request->muhinews_id,
            'foto' => $request->foto,
            'deskripsi_blog' => $request->deskripsi_blog,
            'muhinews_blog' => $request->muhinews_blog,
            'kategori_blog' => $request->kategori_blog,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        return redirect()->route('muhiblogadmin')->with('toast_success', ' Data Berhasil di Tambahkan!');
    }

    public function editmuhiblog($id)
    {

        $data = Muhiblog::findOrFail($id);
        return view('muhinews.adminmuhiblog.editmuhiblog', compact('data'));
    }

    public function editmuhiblogproses(Request $request, $id)
    {
        $this->validate($request, [
            'judul_blog' => 'required',
            'deskripsi_blog' => 'required',
            'kategori_blog' => 'required',
            'muhinews_blog' => 'required',
            'kategori_blog' => 'required',
        ], [
            'judul_blog.required' => 'Harus diisi',
            'deskripsi_blog.required' => 'Harus diisi',
            'kategori_blog.required' => 'Harus diisi',
            'muhinews_blog.required' => 'Harus diisi',
            'kategori_blog.required' => 'Harus diisi',

        ]);
        $data = Muhiblog::find($id);
        $data->update([
            'judul_blog' => $request->judul_blog,
            'deskripsi_blog' => $request->deskripsi_blog,
            'kategori_blog' => $request->kategori_blog,
            'muhinews_blog' => $request->muhinews_blog,
            'kategori_blog' => $request->kategori_blog,
        ]);

        return redirect('muhiblogadmin')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function delete($id)
    {
        $data = Muhiblog::find($id);
        $data->delete();
        return redirect('muhiblogadmin')->with('toast_error', ' Data Berhasil di Hapus!');
=======
>>>>>>> 4d6c595584a3374467fc2c2c438a01ceb412aec7
>>>>>>> 670a97242da062ac8040965fb58783da25780d37
    }
}
