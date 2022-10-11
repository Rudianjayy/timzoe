<?php

namespace App\Http\Controllers;
use App\Models\osis;
use App\Models\Jurusan;
use App\Models\Mikrotik;
use App\Models\Muhinews;
use App\Models\Footeer;
use Illuminate\Http\Request;
use App\Models\ekstrakulikuler;
use App\Models\alumni;


class KesiswaanController extends Controller
{
    public function ekstra(){
        $f = Muhinews::all();
        $d = Muhinews::paginate(6);
        $ft = Footeer::all();
        $data = ekstrakulikuler::all();
        return view('kesiswaan.ekstrakulikuler.ekstra',compact('data','f','d','ft'));
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

    public function delete($id){
        $data = ekstrakulikuler::find($id);
        $data->delete();
        return redirect('ekstrakulikuleradmin')->with('toast_error',' Data Berhasil di Hapus!');
    }
































    public function mikrotik() {
        $m = Mikrotik::all();
        return view('kesiswaan.mikrotik.mikrotik',compact('m'));
    }
    public function mikrotikadmin() {
        $data = Mikrotik::all();
        return view('kesiswaan.mikrotik.mikrotik-admin', compact('data'));
    }
    public function tambahmikrotik()
    {
        return view('kesiswaan.mikrotik.tambahmikrotik');
    }

    public function mikrotikproses2(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_mikrotik' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_mikrotik.required' =>'Harus diisi',

        ]);
        $data = Mikrotik::create([
            'foto' =>$request->foto,
            'deskripsi_mikrotik' =>$request->deskripsi_mikrotik,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('mikrotikadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editmikrotik($id){

        $data = Mikrotik::findOrFail($id);
        return view('kesiswaan.mikrotik.editmikrotik', compact('data'));
    }

    public function editproses4(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'deskripsi_mikrotik' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'deskripsi_mikrotik' =>'harus diisi',

        ]);
        $data = Mikrotik::find($id);
        $data->update([
            'deskripsi_mikrotik' =>$request->deskripsi_mikrotik,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomikrotik/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('mikrotikadmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletemikrotik($id){
        $data = Mikrotik::find($id);
        $data->delete();
        return redirect('mikrotikadmin')->with('toast_error',' Data Berhasil di Hapus!');
    }






















    public function osis() {
        $b = osis::all();
        $f = Muhinews::paginate(4);
        // $kh= jurusan::all();
        $ft = Footeer::all();
        return view('kesiswaan.osis.osis',compact('b','f','ft'));
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




















    public function alumni(Request $request) {
        $l = alumni::all();
        $ft = Footeer::all();
        $f = Muhinews::paginate(4);
        return view('kesiswaan.alumni.alumni',compact('l','f','ft'));
    }
        public function alumniadmin() {
        $data = alumni::all();
        return view('kesiswaan.alumni.alumni-admin', compact('data'));
    }
        public function tambahalumni()
    {
        return view('kesiswaan.alumni.tambahalumni');
    }

    public function alumniproses6(Request $request){
        // dd($request->all());
 
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_alumni' =>'required',
            'deskripsi_alumni' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_alumni.required' =>'Harus diisi',
            'deskripsi_alumni.required' =>'Harus diisi',

        ]);
        $data = alumni::create([
            'foto' =>$request->foto,
            'judul_alumni' =>$request->judul_alumni,
            'deskripsi_alumni' =>$request->deskripsi_alumni,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('alumniadmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editalumni($id){

        $data = alumni::findOrFail($id);
        return view('kesiswaan.alumni.editalumni', compact('data'));
    }

    public function editproses6(Request $request, $id){
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul_alumni' =>'required',
            'deskripsi_alumni' =>'required',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_alumni.required' =>'Harus diisi',
            'deskripsi_alumni.required' =>'Harus diisi',


        ]);
        $data = alumni::find($id);
        $data->update([
            'judul_alumni' =>$request->judul_alumni,
            'deskripsi_alumni' =>$request->deskripsi_alumni,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
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
