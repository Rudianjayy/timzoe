<?php

namespace App\Http\Controllers;
use App\Models\osis;
use App\Models\Jurusan;
use App\Models\Mikrotik;
use App\Models\Muhinews;
use App\Models\footeer;
use App\Models\footeerdua;
use Illuminate\Http\Request;
use App\Models\ekstrakulikuler;
use App\Models\alumni;
use App\Models\Personaljurusan;

class KesiswaanController extends Controller
{
    public function ekstra(){
        $f =ekstrakulikuler::all();
        $d =ekstrakulikuler::paginate(6);
        $ft = Footeer::all();
        $data = ekstrakulikuler::all();
        $personal = personaljurusan::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('kesiswaan.ekstrakulikuler.ekstra',compact('data','f','d','ft','personal','logo','link'));
    }
    public function ekstrakulikuleradmin() {
        $data = ekstrakulikuler::all();
        return view('kesiswaan.ekstrakulikuler.ekstrakulikuler-admin', compact('data'));
    }
    public function tambahekstrakulikuler()
    {
        return view('kesiswaan.ekstrakulikuler.tambahekstrakulikuler');
    }

    public function ekstrakulikulerproses1(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_ekstra' =>'required',
            'deskripsi_ekstrakulikuler' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_ekstra.required' =>'Harus diisi',
            'deskripsi_ekstrakulikuler.required' =>'Harus diisi',

        ]);
        $data = ekstrakulikuler::create([
            'foto' =>$request->foto,
            'judul_ekstra' =>$request->judul_ekstra,
            'deskripsi_ekstrakulikuler' =>$request->deskripsi_ekstrakulikuler,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('ekstrakulikuleradmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editekstrakulikuler($id){

        $data = ekstrakulikuler::findOrFail($id);
        return view('kesiswaan.ekstrakulikuler.editekstrakulikuler', compact('data'));
    }

    public function editproses3(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_ekstra' =>'required',
            'deskripsi_ekstrakulikuler' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_ekstra' =>'harus diisi',
            'deskripsi_ekstrakulikuler' =>'harus diisi',

        ]);
        $data = ekstrakulikuler::find($id);
        $data->update([
            'judul_ekstra' =>$request->judul_ekstra,
            'deskripsi_ekstrakulikuler' =>$request->deskripsi_ekstrakulikuler,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('ekstrakulikuleradmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deleteekstra($id){
        $data = ekstrakulikuler::find($id);
        $data->delete();
        return redirect('ekstrakulikuleradmin')->with('toast_error',' Data Berhasil di Hapus!');
    }





    //ekstrakulikulerblog




    public function osis() {
        $osis = osis::all();
        $d = Muhinews::paginate(3);
        $f = Muhinews::paginate(4);
        // $kh= jurusan::all();
        $ft = Footeer::all();
        $personal =Personaljurusan::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('kesiswaan.osis.osis',compact('osis','f','ft','personal','logo','link','d'));
    }
    public function osisadmin() {
        $data = osis::all();
        return view('kesiswaan.osis.osis-admin', compact('data'));
    }
    public function tambahosis()
    {
        return view('kesiswaan.osis.tambahosis');
    }

    public function osisproses3(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_osis' =>'required',
            'deskripsi_osis' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_osis.required' =>'Harus diisi',
            'deskripsi_osis.required' =>'Harus diisi',

        ]);
        $data = osis::create([
            'foto' =>$request->foto,
            'judul_osis' =>$request->judul_osis,
            'deskripsi_osis' =>$request->deskripsi_osis,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('osisadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editosis($id){

        $data = osis::findOrFail($id);
        return view('kesiswaan.osis.editosis', compact('data'));
    }

    public function editproses5(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_osis' =>'required',
            'deskripsi_osis' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_osis' =>'harus diisi',
            'deskripsi_osis' =>'harus diisi',

        ]);
        $data = osis::find($id);
        $data->update([
            'judul_osis' =>$request->judul_osis,
            'deskripsi_osis' =>$request->deskripsi_osis,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('osisadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deleteosis($id){
        $data = osis::find($id);
        $data->delete();
        return redirect('osisadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }




















    public function alumni() {
        $personal = Personaljurusan::all();
        $alumni = alumni::paginate(4);
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('kesiswaan.alumni.alumni',compact('personal','logo','link','alumni'));
    }
        public function alumniadmin() {
        $data = alumni::all();
        return view('kesiswaan.alumni.alumni-admin', compact('data'));
    }
        public function tambahalumni()
    {
        return view('kesiswaan.alumni.tambahalumni');
    }

    public function tambahalumniproses(Request $request){
        // dd($request->all());

        $this->validate($request,[
            'foto_alumni' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'nama_alumni' =>'required',
            'deskripsi_alumni' =>'required',
        ],[
            'foto_alumni.required' =>'Harus diisi',
            'foto_alumni.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'nama_alumni.required' =>'Harus diisi',
            'deskripsi_alumni.required' =>'Harus diisi',

        ]);
        $data = alumni::create([
            'foto_alumni' =>$request->foto_alumni,
            'nama_alumni' =>$request->nama_alumni,
            'deskripsi_alumni' =>$request->deskripsi_alumni,
        ]);
        if($request->hasFile('foto_alumni')){
            $request->file('foto_alumni')->move('fotomahasiswa/', $request->file('foto_alumni')->getClientOriginalName());
            $data->foto_alumni = $request->file('foto_alumni')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('alumniadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editalumni($id){

        $data = alumni::findOrFail($id);
        return view('kesiswaan.alumni.editalumni', compact('data'));
    }

    public function editprosesalumni(Request $request, $id){
        $this->validate($request,[
            'nama_alumni' =>'required',
            'deskripsi_alumni' =>'required',
        ],[
            'nama_alumni.required' =>'Harus diisi',
            'deskripsi_alumni.required' =>'Harus diisi',


        ]);
        $data = alumni::find($id);
        $data->update([
            'nama_alumni' =>$request->nama_alumni,
            'deskripsi_alumni' =>$request->deskripsi_alumni,
        ]);
        if($request->hasFile('foto_alumni')){
            $request->file('foto_alumni')->move('fotomahasiswa/', $request->file('foto_alumni')->getClientOriginalName());
            $data->foto_alumni = $request->file('foto_alumni')->getClientOriginalName();
            $data->save();
        }
        return redirect('alumniadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletealumni($id){
        $data = alumni::find($id);
        $data->delete();
        return redirect('alumniadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }



}
