<?php

namespace App\Http\Controllers;
use App\Models\Muhinews;
use App\Models\Jurusan;
use App\Models\Personaljurusan;
use App\Models\footeer;
use App\Models\Bsi;
use App\Models\Edotel;
use App\Models\Pegadaian;
use App\Models\Suryamart;
use App\Models\Printing;
use App\Models\footeerdua;
use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj() {
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        $personal = Personaljurusan::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('upj.indexupj', compact('f','kh','personal','logo','link'));
    }










    public function indexbsi(){
        $bsi = Bsi::all();
        $data = Bsi::all();
        $link = footeerdua::all();
        return view('upj.bsi.bsi', compact('bsi','data','link'));
    }

    public function loby8() {
        $data = Bsi::all();
        return view('upj.bsi.admin-bsi', compact('data'));
    }
    public function tambahbsi()
    {
        return view('upj.bsi.tambah-bsi');
    }

    public function submitdata8(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_bsi' =>'required',
        ],[
            'deskripsi_bsi.required' =>'Harus diisi',

        ]);
        $data = Bsi::create([
            'deskripsi_bsi' =>$request->deskripsi_bsi,
            'foto' =>$request->foto,

        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminbsi')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editbsi($id){

        $data = Bsi::findOrFail($id);
        return view('upj.bsi.edit-bsi', compact('data'));
    }

    public function submitedit8(Request $request, $id){
        $this->validate($request,[
            'deskripsi_bsi' =>'required',
        ],[
            'deskripsi_bsi' =>'harus diisi',

        ]);
        $data = Bsi::find($id);
        $data->update([
            'deskripsi_bsi' =>$request->deskripsi_bsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminbsi')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletebsi($id){
        $data = Bsi::find($id);
        $data->delete();
        return redirect('adminbsi')->with('toast_error',' Data Berhasil di Hapus!');
    }













    public function indexmuhiprint(){
        $print = Printing::all();
        $data2 = Printing::all();
        $link = footeerdua::all();
        return view('upj.muhip.muhi-printing', compact('print','data2','link'));
    }

    public function loby9() {
        $data2 = Printing::all();
        return view('upj.muhip.admin-muhi-printing', compact('data2'));
    }
    public function tambahmuhiprint()
    {
        return view('upj.muhip.tambah-muhi-printing');
    }

    public function submitdata9(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_muhiprint' =>'required',
        ],[
            'deskripsi_muhiprint.required' =>'Harus diisi',

        ]);
        $data2 = Printing::create([
            'deskripsi_muhiprint' =>$request->deskripsi_muhiprint,
            'foto_muhiprint' =>$request->foto_muhiprint,

        ]);
        if($request->hasFile('foto_muhiprint')){
            $request->file('foto_muhiprint')->move('fotomahasiswa/', $request->file('foto_muhiprint')->getClientOriginalName());
            $data2->foto_muhiprint = $request->file('foto_muhiprint')->getClientOriginalName();
            $data2->save();
        }

        return redirect()->route('adminmuhiprint')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editmuhiprint($id){

        $data2 = Printing::findOrFail($id);
        return view('upj.muhip.edit-muhi-printing', compact('data2'));
    }

    public function submitedit9(Request $request, $id){
        $this->validate($request,[
            'deskripsi_muhiprint' =>'required',
        ],[
            'deskripsi_muhiprint' =>'harus diisi',

        ]);
        $data2 = Printing::find($id);
        $data2->update([
            'deskripsi_muhiprint' =>$request->deskripsi_muhiprint,
        ]);
        if($request->hasFile('foto_muhiprint')){
            $request->file('foto_muhiprint')->move('fotomahasiswa/',$request->file('foto_muhiprint')->getClientOriginalName());
            $data2->foto_muhiprint = $request->file('foto_muhiprint')->getClientOriginalName();
            $data2->save();
        }

        return redirect('adminmuhiprint')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletemuhiprinnt($id){
        $data2 = Printing::find($id);
        $data2->delete();
        return redirect('adminmuhiprint')->with('toast_error',' Data Berhasil di Hapus!');
    }










    public function indexpegadaian(){
        $gadai = Pegadaian::all();
        $data3 = Pegadaian::all();
        $link = footeerdua::all();
        return view('upj.gadai.pegadaian', compact('gadai','data3','link'));
    }

    public function loby10() {
        $data3 = Pegadaian::all();
        return view('upj.gadai.admin-pegadaian', compact('data3'));
    }
    public function tambahpegadaian()
    {
        return view('upj.gadai.tambah-pegadaian');
    }

    public function submitdata10(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_gadai' =>'required',
        ],[
            'deskripsi_gadai.required' =>'Harus diisi',

        ]);
        $data3 = Pegadaian::create([
            'deskripsi_gadai' =>$request->deskripsi_gadai,
            'foto_gadai' =>$request->foto_gadai,

        ]);
        if($request->hasFile('foto_gadai')){
            $request->file('foto_gadai')->move('fotomahasiswa/', $request->file('foto_gadai')->getClientOriginalName());
            $data3->foto_gadai = $request->file('foto_gadai')->getClientOriginalName();
            $data3->save();
        }

        return redirect()->route('adminpegadaian')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editpegadaian($id){

        $data3 = Pegadaian::findOrFail($id);
        return view('upj.gadai.edit-pegadaian', compact('data3'));
    }

    public function submitedit10(Request $request, $id){
        $this->validate($request,[
            'deskripsi_gadai' =>'required',
        ],[
            'deskripsi_gadai' =>'harus diisi',

        ]);
        $data3 = Pegadaian::find($id);
        $data3->update([
            'deskripsi_gadai' =>$request->deskripsi_gadai,
        ]);
        if($request->hasFile('foto_gadai')){
            $request->file('foto_gadai')->move('fotomahasiswa/',$request->file('foto_gadai')->getClientOriginalName());
            $data3->foto_gadai = $request->file('foto_gadai')->getClientOriginalName();
            $data3->save();
        }

        return redirect('adminpegadaian')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletepegadaian($id){
        $data3 = Pegadaian::find($id);
        $data3->delete();
        return redirect('adminpegadaian')->with('toast_error',' Data Berhasil di Hapus!');
    }









    public function indexsuryamart(){
        $sm = Suryamart::all();
        $data4 = Suryamart::all();
        $link = footeerdua::all();
        return view('upj.surya.suryamart', compact('sm','data4','link'));
    }

    public function loby11() {
        $data4 = Suryamart::all();
        return view('upj.surya.admin-suryamart', compact('data4'));
    }
    public function tambahsuryamart()
    {
        return view('upj.surya.tambah-suryamart');
    }

    public function submitdata11(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_surya' =>'required',
        ],[
            'deskripsi_surya.required' =>'Harus diisi',

        ]);
        $data4 = Suryamart::create([
            'deskripsi_surya' =>$request->deskripsi_surya,
            'foto_surya' =>$request->foto_surya,

        ]);
        if($request->hasFile('foto_surya')){
            $request->file('foto_surya')->move('fotomahasiswa/', $request->file('foto_surya')->getClientOriginalName());
            $data4->foto_surya = $request->file('foto_surya')->getClientOriginalName();
            $data4->save();
        }

        return redirect()->route('adminsuryamart')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editsuryamart($id){

        $data4 = Suryamart::findOrFail($id);
        return view('upj.surya.edit-suryamart', compact('data4'));
    }

    public function submitedit11(Request $request, $id){
        $this->validate($request,[
            'deskripsi_surya' =>'required',
        ],[
            'deskripsi_surya' =>'harus diisi',

        ]);
        $data4 = Suryamart::find($id);
        $data4->update([
            'deskripsi_surya' =>$request->deskripsi_surya,
        ]);
        if($request->hasFile('foto_surya')){
            $request->file('foto_surya')->move('fotomahasiswa/',$request->file('foto_surya')->getClientOriginalName());
            $data4->foto_surya = $request->file('foto_surya')->getClientOriginalName();
            $data4->save();
        }

        return redirect('adminsuryamart')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletesuryamart($id){
        $data4 = Suryamart::find($id);
        $data4->delete();
        return redirect('adminsuryamart')->with('toast_error',' Data Berhasil di Hapus!');
    }










    public function indexedotel(){
        $ed = Edotel::all();
        $data5 = Edotel::all();
        $link = footeerdua::all();
        return view('upj.edotel.edotel', compact('ed','data5','link'));
    }

    public function loby12() {
        $data5 = Edotel::all();
        return view('upj.edotel.admin-edotel', compact('data5'));
    }
    public function tambahedotel()
    {
        return view('upj.edotel.tambah-edotel');
    }

    public function submitdata12(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_edotel' =>'required',
        ],[
            'deskripsi_edotel.required' =>'Harus diisi',

        ]);
        $data5 = Edotel::create([
            'deskripsi_edotel' =>$request->deskripsi_edotel,
            'foto_edotel' =>$request->foto_edotel,

        ]);
        if($request->hasFile('foto_edotel')){
            $request->file('foto_edotel')->move('fotomahasiswa/', $request->file('foto_edotel')->getClientOriginalName());
            $data5->foto_edotel = $request->file('foto_edotel')->getClientOriginalName();
            $data5->save();
        }

        return redirect()->route('adminedotel')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editedoel($id){

        $data5 = Edotel::findOrFail($id);
        return view('upj.edotel.edit-edotel', compact('data5'));
    }

    public function submitedit12(Request $request, $id){
        $this->validate($request,[
            'deskripsi_edotel' =>'required',
        ],[
            'deskripsi_edotel' =>'harus diisi',

        ]);
        $data5 = Edotel::find($id);
        $data5->update([
            'deskripsi_edotel' =>$request->deskripsi_edotel,
        ]);
        if($request->hasFile('foto_edotel')){
            $request->file('foto_edotel')->move('fotomahasiswa/',$request->file('foto_edotel')->getClientOriginalName());
            $data5->foto_edotel = $request->file('foto_edotel')->getClientOriginalName();
            $data5->save();
        }

        return redirect('adminedotel')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deleteedotel($id){
        $data5 = Edotel::find($id);
        $data5->delete();
        return redirect('adminedotel')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
