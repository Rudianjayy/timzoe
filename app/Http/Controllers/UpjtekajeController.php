<?php

namespace App\Http\Controllers;

use App\Models\Upjjasa;
use App\Models\Upjgalery;
use Illuminate\Http\Request;
use App\Models\Teamupjtekaje;
use App\Models\Testimoni;
use App\Models\Upjkeunggulan;
use App\Models\Upjtentangkami;
use App\Models\Upjvisimisi;

class UpjtekajeController extends Controller
{

    public function upj() {
        $tentang = Upjtentangkami::all();
        $upjt = Upjtentangkami::all();
        $team = Teamupjtekaje::all();
        $keunggulan = Upjkeunggulan::all();
        $upjas = Upjjasa::all();
        $upgal = Upjgalery::all();
        $upjvis = Upjvisimisi::all();
        $tes = Testimoni::all();
        return view('upj.upj', compact('tentang','upjt','team','keunggulan','upjas','upgal','upjvis','tes'));
    }



    public function loby13() {
        $data = Upjtentangkami::all();
        return view('upjtekaje.tentangkami.tentang-kami', compact('data'));
    }
    public function tambahtentangkami()
    {
        return view('upjtekaje.tentangkami.tambah-tentang-kami');
    }

    public function submitdata13(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_tentangkami' =>'required',
        ],[
            'deskripsi_tentangkami.required' =>'Harus diisi',

        ]);
        $data = Upjtentangkami::create([
            'deskripsi_tentangkami' =>$request->deskripsi_tentangkami,
            'foto_tentangkami' =>$request->foto_tentangkami,

        ]);
        if($request->hasFile('foto_tentangkami')){
            $request->file('foto_tentangkami')->move('fotomahasiswa/', $request->file('foto_tentangkami')->getClientOriginalName());
            $data->foto_tentangkami = $request->file('foto_tentangkami')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('tentangkami')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function edittentangkami($id){

        $data = Upjtentangkami::findOrFail($id);
        return view('upjtekaje.tentangkami.edit-tentang-kami', compact('data'));
    }

    public function submitedit13(Request $request, $id){
        $this->validate($request,[
            'deskripsi_tentangkami' =>'required',
        ],[
            'deskripsi_tentangkami' =>'harus diisi',

        ]);
        $data = Upjtentangkami::find($id);
        $data->update([
            'deskripsi_tentangkami' =>$request->deskripsi_tentangkami,
        ]);
        if($request->hasFile('foto_tentangkami')){
            $request->file('foto_tentangkami')->move('fotomahasiswa/',$request->file('foto_tentangkami')->getClientOriginalName());
            $data->foto_tentangkami = $request->file('foto_tentangkami')->getClientOriginalName();
            $data->save();
        }

        return redirect('tentangkami')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletetentangkami($id){
        $data = Upjtentangkami::find($id);
        $data->delete();
        return redirect('tentangkami')->with('toast_error',' Data Berhasil di Hapus!');
    }











    public function loby15() {
        $data2 = Teamupjtekaje::all();
        return view('upjtekaje.team.admin-team', compact('data2'));
    }
    public function tambahteam()
    {
        return view('upjtekaje.team.tambah-team');
    }

    public function submitdata15(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_team' =>'required',
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'foto_team.required' =>'Harus diisi',
            'nama_team.required' =>'Harus diisi',
            'jabatan_team.required' =>'Harus diisi',
            'fb.required' =>'Harus diisi',
            'wa.required' =>'Harus diisi',
            'ig.required' =>'Harus diisi',

        ]);
        $data2 = Teamupjtekaje::create([
            'foto_team' =>$request->foto_team,
            'nama_team' =>$request->nama_team,
            'jabatan_team' =>$request->jabatan_team,
            'fb' =>$request->fb,
            'wa' =>$request->wa,
            'ig' =>$request->ig,

        ]);
        if($request->hasFile('foto_team')){
            $request->file('foto_team')->move('fotomahasiswa/', $request->file('foto_team')->getClientOriginalName());
            $data2->foto_team = $request->file('foto_team')->getClientOriginalName();
            $data2->save();
        }

        return redirect()->route('adminteam')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editteam($id){

        $data2 = Teamupjtekaje::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data2'));
    }

    public function submitedit15(Request $request, $id){
        $this->validate($request,[
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'nama_team' =>'harus diisi',
            'jabatan_team' =>'harus diisi',
            'fb_team' =>'harus diisi',
            'wa_team' =>'harus diisi',
            'ig_team' =>'harus diisi',

        ]);
        $data2 = Teamupjtekaje::find($id);
        $data2->update([
            'nama_team' =>$request->nama_team,
            'jabatan_team' =>$request->jabatan_team,
            'fb' =>$request->fb,
            'wa' =>$request->wa,
            'ig' =>$request->ig,
        ]);
        if($request->hasFile('foto_team')){
            $request->file('foto_team')->move('fotomahasiswa/',$request->file('foto_team')->getClientOriginalName());
            $data2->foto_team = $request->file('foto_team')->getClientOriginalName();
            $data2->save();
        }

        return redirect('adminteam')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deleteteam($id){
        $data2 = Teamupjtekaje::find($id);
        $data2->delete();
        return redirect('adminteam')->with('toast_error',' Data Berhasil di Hapus!');
    }











    

    public function loby16() {
        $data3 = Upjkeunggulan::all();
        return view('upjtekaje.keunggulan.admin-keunggulan', compact('data3'));
    }
    public function tambahkeunggulan()
    {
        return view('upjtekaje.keunggulan.tambah-keunggulan');
    }

    public function submitdata16(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_keunggulan' =>'required',
            'keterangan' =>'required',
        ],[
            'foto_keunggulan.required' =>'Harus diisi',
            'keterangan.required' =>'Harus diisi',

        ]);
        $data3 = Upjkeunggulan::create([
            'foto_keunggulan' =>$request->foto_keunggulan,
            'keterangan' =>$request->keterangan,

        ]);
        if($request->hasFile('foto_keunggulan')){
            $request->file('foto_keunggulan')->move('fotomahasiswa/', $request->file('foto_keunggulan')->getClientOriginalName());
            $data3->foto_keunggulan = $request->file('foto_keunggulan')->getClientOriginalName();
            $data3->save();
        }

        return redirect()->route('adminkeunggulan')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editkeunggulan($id){

        $data3 = Upjkeunggulan::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data3'));
    }

    public function submitedit16(Request $request, $id){
        $this->validate($request,[
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'nama_team' =>'harus diisi',
            'jabatan_team' =>'harus diisi',
            'fb_team' =>'harus diisi',
            'wa_team' =>'harus diisi',
            'ig_team' =>'harus diisi',

        ]);
        $data3 = Upjkeunggulan::find($id);
        $data3->update([
            'nama_team' =>$request->nama_team,
        ]);
        // if($request->hasFile('foto_keunggulan')){
        //     $request->file('foto_keunggulan')->move('fotomahasiswa/',$request->file('foto_keunggulan')->getClientOriginalName());
        //     $data3->foto_keunggulan = $request->file('foto_keunggulan')->getClientOriginalName();
        //     $data3->save();
        // }

        return redirect('adminkeunggulan')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletekeunggulan($id){
        $data3 = Upjkeunggulan::find($id);
        $data3->delete();
        return redirect('adminkeunggulan')->with('toast_error',' Data Berhasil di Hapus!');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function loby17() {
        $data4 = Upjjasa::all();
        $upjas = Upjjasa::all();
        return view('upjtekaje.jasa.admin-jasa', compact('data4','upjas'));
    }
    public function tambahjasa()
    {
        return view('upjtekaje.jasa.tambah-jasa');
    }

    public function submitdata17(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_jasa' =>'required',
            'jasa' =>'required',
            'penjelasan' =>'required',
        ],[
            'foto_jasa.required' =>'Harus diisi',
            'jasa.required' =>'Harus diisi',
            'penjelasan.required' =>'Harus diisi',

        ]);
        $data4 = Upjjasa::create([
            'foto_jasa' =>$request->foto_jasa,
            'jasa' =>$request->jasa,
            'penjelasan' =>$request->penjelasan,

        ]);
        if($request->hasFile('foto_jasa')){
            $request->file('foto_jasa')->move('fotomahasiswa/', $request->file('foto_jasa')->getClientOriginalName());
            $data4->foto_jasa = $request->file('foto_jasa')->getClientOriginalName();
            $data4->save();
        }

        return redirect()->route('adminjasa')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editjasa($id){

        $data4 = Upjjasa::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data4'));
    }

    public function submitedit17(Request $request, $id){
        $this->validate($request,[
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'nama_team' =>'harus diisi',
            'jabatan_team' =>'harus diisi',
            'fb_team' =>'harus diisi',
            'wa_team' =>'harus diisi',
            'ig_team' =>'harus diisi',

        ]);
        $data4 = Upjjasa::find($id);
        $data4->update([
            'nama_team' =>$request->nama_team,
        ]);
        // if($request->hasFile('foto_jasa')){
        //     $request->file('foto_jasa')->move('fotomahasiswa/',$request->file('foto_jasa')->getClientOriginalName());
        //     $data4->foto_jasa = $request->file('foto_jasa')->getClientOriginalName();
        //     $data4->save();
        // }

        return redirect('adminjasa')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletejasa($id){
        $data4 = Upjjasa::find($id);
        $data4->delete();
        return redirect('adminjasa')->with('toast_error',' Data Berhasil di Hapus!');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    public function loby18() {
        $data5 = Upjgalery::all();
        $upgal = Upjgalery::all();
        return view('upjtekaje.galery.admin-galery', compact('data5','upgal'));
    }
    public function tambahgalery()
    {
        return view('upjtekaje.galery.tambah-galery');
    }

    public function submitdata18(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_galery' =>'required',
        ],[
            'foto_galery.required' =>'Harus diisi',

        ]);
        $data5 = Upjgalery::create([
            'foto_galery' =>$request->foto_galery,

        ]);
        if($request->hasFile('foto_galery')){
            $request->file('foto_galery')->move('fotomahasiswa/', $request->file('foto_galery')->getClientOriginalName());
            $data5->foto_galery = $request->file('foto_galery')->getClientOriginalName();
            $data5->save();
        }

        return redirect()->route('admingalery')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editgalery($id){

        $data5 = Upjgalery::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data5'));
    }

    public function submitedit18(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data5 = Upjgalery::find($id);
        $data5->update([
        ]);
        if($request->hasFile('foto_galery')){
            $request->file('foto_galery')->move('fotomahasiswa/',$request->file('foto_galery')->getClientOriginalName());
            $data5->foto_galery = $request->file('foto_galery')->getClientOriginalName();
            $data5->save();
        }

        return redirect('admingalery')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletegalery($id){
        $data5 = Upjgalery::find($id);
        $data5->delete();
        return redirect('admingalery')->with('toast_error',' Data Berhasil di Hapus!');
    }
    
    
    
    
    
    
    
    
    public function loby19() {
        $data6 = Upjvisimisi::all();
        $vis = Upjvisimisi::all();
        return view('upjtekaje.visimisi.admin-visimisi', compact('data6','vis'));
    }
    public function tambahvisimisi()
    {
        return view('upjtekaje.visimisi.tambah-visimisi');
    }

    public function submitdata19(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'upj_visi' =>'required',
            'upj_misi' =>'required',
            'foto_bg' =>'required',
            'link_yt' =>'required',
        ],[
            'upj_misi.required' =>'Harus diisi',
            'upj_misi.required' =>'Harus diisi',
            'foto_bg.required' =>'Harus diisi',
            'link_yt.required' =>'Harus diisi',

        ]);
        $data6 = Upjvisimisi::create([
            'upj_visi' =>$request->upj_visi,
            'upj_misi' =>$request->upj_misi,
            'foto_bg' =>$request->foto_bg,
            'link_yt' =>$request->link_yt,

        ]);
        if($request->hasFile('foto_bg')){
            $request->file('foto_bg')->move('fotomahasiswa/', $request->file('foto_bg')->getClientOriginalName());
            $data6->foto_bg = $request->file('foto_bg')->getClientOriginalName();
            $data6->save();
        }

        return redirect()->route('adminvisimisi')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editvisimisi($id){

        $data6 = Upjvisimisi::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data6'));
    }

    public function submitedit19(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data6 = Upjvisimisi::find($id);
        $data6->update([
        ]);
        if($request->hasFile('foto_visimisi')){
            $request->file('foto_visimisi')->move('fotomahasiswa/',$request->file('foto_visimisi')->getClientOriginalName());
            $data6->foto_visimisi = $request->file('foto_visimisi')->getClientOriginalName();
            $data6->save();
        }

        return redirect('adminvisimisi')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletevisimisi($id){
        $data6 = Upjvisimisi::find($id);
        $data6->delete();
        return redirect('adminvisimisi')->with('toast_error',' Data Berhasil di Hapus!');
    }
    
    

    
    
    
    
    
    public function loby20() {
        $data7 = Testimoni::all();
        $tes = Testimoni::all();
        return view('upjtekaje.testimoni.admin-testimoni', compact('data7','tes'));
    }
    public function tambahtestimoni()
    {
        return view('upjtekaje.testimoni.tambah-testimoni');
    }

    public function submitdata20(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'komen' =>'required',
            'tester' =>'required'
        ],[
            'komen.required' =>'Harus diisi',
            'tester.required' =>'Harus diisi',

        ]);
        $data7 = Testimoni::create([
            'komen' =>$request->komen,
            'tester' =>$request->tester,

        ]);
        // if($request->hasFile('foto_bg')){
        //     $request->file('foto_bg')->move('fotomahasiswa/', $request->file('foto_bg')->getClientOriginalName());
        //     $data7->foto_bg = $request->file('foto_bg')->getClientOriginalName();
        //     $data7->save();
        // }

        return redirect()->route('admintestimoni')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function edittestimoni($id){

        $data7 = Testimoni::findOrFail($id);
        return view('upjtekaje.testimoni.edit-testimoni', compact('data7'));
    }

    public function submitedit20(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data7 = Testimoni::find($id);
        $data7->update([
        ]);
        // if($request->hasFile('foto_testimoni')){
        //     $request->file('foto_testimoni')->move('fotomahasiswa/',$request->file('foto_testimoni')->getClientOriginalName());
        //     $data7->foto_testimoni = $request->file('foto_testimoni')->getClientOriginalName();
        //     $data7->save();
        // }

        return redirect('admintestimoni')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletetestimoni($id){
        $data7 = Testimoni::find($id);
        $data7->delete();
        return redirect('admintestimoni')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
