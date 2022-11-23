<?php

namespace App\Http\Controllers;

use App\Models\Carapendaftaran;
use App\Models\Deskripsipendaftaran;
use App\Models\footeer;
use App\Models\Footeerdua;
use App\Models\Formulir;
use App\Models\syaratdaftar;
use App\Models\biaya;
use App\Models\kontak;
use App\Models\info;
use App\Models\Jurusan;
use App\Models\mitrappdb;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function pendaftaran(){
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $ab = biaya::all();
        $ac = syaratdaftar::all();
        $ar = kontak::all();
        $info = info::all();
        return view('ppdb.pendaftaran', compact('dp','pd','cp','ab','ac','ar','info'));
    }



    public function loby24() {
        $data = Deskripsipendaftaran::all();
        $us = Deskripsipendaftaran::all();
        return view('ppdb.deskripsi.deskripsi-pendaftaran', compact('data','us'));
    }

    public function editdeskripsipendaftaran($id){

        $data = Deskripsipendaftaran::findOrFail($id);
        return view('ppdb.deskripsi.edit-deskripsi', compact('data'));
    }

    public function submitedit24(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data = Deskripsipendaftaran::find($id);
        $data->update([
            'judul_slider' =>$request->judul_slider,
            'deskripsi_slider' =>$request->deskripsi_slider,
            'deskripsi_pendaftaran' =>$request->deskripsi_pendaftaran,
            'deskripsi_kontak' =>$request->deskripsi_kontak,
        ]);

        return redirect('deskripsipendaftaran')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletedeskripsipendaftaran($id){
        $data = Deskripsipendaftaran::find($id);
        $data->delete();
        return redirect('deskripsipendaftaran')->with('toast_error',' Data Berhasil di Hapus!');
    }










    public function loby25()
    {
        $data1 = Carapendaftaran::all();
        return view('ppdb.caradaftar.admin-cara-pendaftaran', compact('data1'));
    }
    public function tambahcarapendaftaran()
    {
        return view('ppdb.caradaftar.tambah-cara-pendaftaran');
    }

    public function submitdata25(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi' => 'required',
            'deskripsi_detail' => 'required',
        ], [
            'deskripsi.required' => 'Harus diisi',
            'deskripsi_detail.required' => 'Harus diisi',

        ]);
        $data1 = Carapendaftaran::create([
            'deskripsi' => $request->deskripsi,
            'deskripsi_detail' => $request->deskripsi_detail,

        ]);

        return redirect()->route('admincarapendaftaran')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editCarapendaftaran($id)
    {

        $data1 = Carapendaftaran::findOrFail($id);
        return view('ppdb.caradaftar.edit-cara-pendaftaran', compact('data1'));
    }

    public function submitedit25(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
            'deskripsi_detail' => 'required',
        ], [
            'deskripsi' => 'harus diisi',
            'deskripsi_detail' => 'harus diisi',

        ]);
        $data1 = Carapendaftaran::find($id);
        $data1->update([
            'deskripsi' => $request->deskripsi,
            'deskripsi_detail' => $request->deskripsi_detail,
        ]);

        return redirect('admincarapendaftaran')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deletecarapendaftaran($id)
    {
        $data1 = Carapendaftaran::find($id);
        $data1->delete();
        return redirect('admincarapendaftaran')->with('success', ' Data Berhasil di Hapus!');
    }















    public function syaratdaftar(){
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $data2 = syaratdaftar::all();
        $ab = biaya::all();

        return view('ppdb.syarat.syaratdaftar', compact('f','kh','dp','pd','kontak','cp','data2','ab'));
    }



    public function adminsyaratdaftar() {
        $data = Deskripsipendaftaran::all();
        $us = Deskripsipendaftaran::all();
        $data2 = syaratdaftar::all();
        return view('ppdb.syarat.adminsyaratdaftar', compact('data','us','data2'));
    }

    public function editsyaratdaftar($id){

        $data = Deskripsipendaftaran::findOrFail($id);
        return view('ppdb.syarat.editsyaratdaftar', compact('data'));
    }

    public function prosesdaftar(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data = Deskripsipendaftaran::find($id);
        $data->update([

            'deskripsi' =>$request->deskripsi,
        ]);

        return redirect('adminsyaratdaftar')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function tambahsyaratdaftar()
    {
        return view('ppdb.syarat.tambahsyaratdaftar');
    }

    public function submitproses12(Request $request){
        $this->validate($request,[
            'deskripsi' =>'required',

        ],[
            'deskripsi.required' =>'Harus diisi',
        ]);
        $data2 = syaratdaftar::create([
            'deskripsi' =>$request->deskripsi,
        ]);
        return redirect()->route('adminsyaratdaftar')->with('success',' Data Berhasil di Tambahkan!');
    }


    public function deletedaftar($id){
        $data = syaratdaftar::find($id);
        $data->delete();
        return redirect('adminsyaratdaftar')->with('toast_error',' Data Berhasil di Hapus!');
    }









    public function kontak(){
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $data3 = kontak::all();
        return view('ppdb.kontak.kontak', compact('dp','pd','kontak','cp','data3'));
    }

    public function submitproses14(Request $request){
        // dd($request->all());

        $this->validate($request,[
            'nama' =>'required',
            'namaemail' =>'required',
            'notelpon' =>'required',
            'subjek' =>'required',
            'pesan' =>'required',

        ],[
            'nama.required' =>'Harus diisi',
            'namaemail.required' =>'Harus diisi',
            'notelpon.required' =>'Harus diisi',
            'subjek.required' =>'Harus diisi',
            'pesan.required' =>'Harus diisi',


        ]);
        $data = kontak::create([
            'nama' =>$request->nama,
            'namaemail' =>$request->namaemail,
            'notelpon' =>$request->notelpon,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,

        ]);
        if($request->hasFile('foto_kontak')){
            $request->file('foto_kontak')->move('fotomahasiswa/', $request->file('foto_kontak')->getClientOriginalName());
            $data->foto_kontak = $request->file('foto_kontak')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kontakadmin')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editkontak($id){

        $data = kontak::findOrFail($id);
        return view('ppdb.kontak.editkontak', compact('data'));
    }

    public function editproses14(Request $request, $id){
        $this->validate($request,[
            'nama' =>'required',
            'namaemail' =>'required',
            'notelpon' =>'required',
            'subjek' =>'required',
            'pesan' =>'required',
        ],[
            'nama.required' =>'Harus diisi',
            'namaemail.required' =>'Harus diisi',
            'notelpon.required' =>'Harus diisi',
            'subjek.required' =>'Harus diisi',
            'pesan.required' =>'Harus diisi',



        ]);
        $data = kontak::find($id);
        $data->update([
            'nama' =>$request->nama,
            'namaemail' =>$request->namaemail,
            'notelpon' =>$request->notelpon,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,
        ]);
        if($request->hasFile('foto_kontak')){
            $request->file('foto_kontak')->move('fotomahasiswa/', $request->file('foto_kontak')->getClientOriginalName());
            $data->foto_kontak = $request->file('foto_kontak')->getClientOriginalName();
            $data->save();
        }
        return redirect('kontakadmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function deletekontak($id){
        $data = kontak::find($id);
        $data->delete();
        return redirect('kontakadmin')->with('success',' Data Berhasil di Hapus!');
    }






















    public function loby27(){
       $data4 = Formulir::all();
        return view('ppdb.formulir.formulir', compact('data4'));
    }

    public function tambahformulir()
    {
        return view('ppdb.formulir.tambah-formulir');
    }

    public function submitdata27(Request $request){
        // $this->validate($request,[
        //     'nama_peserta' =>'required',
        //     'jeniskelamin' =>'required',
        //     'tempat_lahir' =>'required',
        //     'tanggal_lahir' =>'required',
        //     'agama' =>'required',
        //     'nisn' =>'required',
        //     'nik' =>'required',
        //     'nokk' =>'required',
        //     'foto_kk' =>'required',
        //     'foto_bukti' =>'required',
        //     'status' =>'required',
        //     'alamat_rumah' =>'required',
        //     'nama_ayah' =>'required',
        //     'nama_ibu' =>'required',
        //     'pekerjaan_ayah' =>'required',
        //     'pekerjaan_ibu' =>'required',
        //     'sekolah_asal' =>'required',
        //     'notelpon_siswa' =>'required',
        //     'notelpon_orangtua' =>'required',
        //     'prestasi' =>'required',
        //     'ukuran_kaos' =>'required',
        //     'jurusan' =>'required',


        // ]);
        $data4 = Formulir::create([
            'nama_peserta' =>$request->nama_peserta,
            'jeniskelamin' =>$request->jeniskelamin,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'agama' =>$request->agama,
            'nisn' =>$request->nisn,
            'nik' =>$request->nik,
            'nokk' =>$request->nokk,
            'foto_kk' =>$request->foto_kk,
            'foto_bukti' =>$request->foto_bukti,
            'status' =>$request->status,
            'alamat_rumah' =>$request->alamat_rumah,
            'nama_ayah' =>$request->nama_ayah,
            'nama_ibu' =>$request->nama_ibu,
            'pekerjaan_ayah' =>$request->pekerjaan_ayah,
            'pekerjaan_ibu' =>$request->pekerjaan_ibu,
            'sekolah_asal' =>$request->sekolah_asal,
            'notelpon_siswa' =>$request->notelpon_siswa,
            'notelpon_orangtua' =>$request->notelpon_orangtua,
            'prestasi' =>$request->prestasi,
            'ukuran_kaos' =>implode(',',$request-> ukuran_kaos),
            'jurusan' =>$request->jurusan,

        ]);
        if($request->hasFile('foto_kk')){
            $request->file('foto_kk')->move('fotomahasiswa/', $request->file('foto_kk')->getClientOriginalName());
            $data4->foto_kk = $request->file('foto_kk')->getClientOriginalName();
            $data4->save();
        }
        if($request->hasFile('foto_bukti')){
            $request->file('foto_bukti')->move('fotomahasiswa/', $request->file('foto_bukti')->getClientOriginalName());
            $data4->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
            $data4->save();
        }
        return redirect()->route('adminformulir')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function deleteformulir($id){
        $data4 = Formulir::find($id);
        $data4 ->delete();
        return redirect('adminformulir')->with('toast_error',' Data Berhasil di Hapus!');
    }



    public function adminbiaya() {
        $data3 = biaya::all();
        return view('ppdb.biaya.adminbiaya', compact('data3'));
    }

    public function editbiaya($id){

        $data3 = biaya::findOrFail($id);
        return view('ppdb.biaya.editbiaya', compact('data3'));
    }

    public function editprosesbiaya1(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data = biaya::find($id);
        $data->update([

            'gelombang' =>$request->gelombang,
            'penjelas' =>$request->penjelas,
            'jadwal' =>$request->jadwal,

        ]);

        return redirect('adminbiaya')->with('toast_success',' Data Berhasil di Ubah!');

    }


    public function tambahbiaya()
    {
        return view('ppdb.biaya.tambahbiaya');
    }

    public function submitprosesbiaya(Request $request){
        $this->validate($request,[
            'gelombang' =>'required',
            'penjelas' =>'required',
            'jadwal' =>'required',

        ],[
            'gelombang.required' =>'Harus diisi',
            'penjelas.required' =>'Harus diisi',
            'jadwal.required' =>'Harus diisi',

        ]);
        $data3 = biaya::create([
            'gelombang' =>$request->gelombang,
            'penjelas' =>$request->penjelas,
            'jadwal' =>$request->jadwal,

        ]);
        return redirect()->route('adminbiaya')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function deletebiaya($id){
        $data = biaya::find($id);
        $data->delete();
        return redirect('adminbiaya')->with('toast_error',' Data Berhasil di Hapus!');
    }


    public function info() {
        return view('ppdb.info.info');
    }
    public function admininfo() {
        $data = info::all();
        return view('ppdb.info.admininfo', compact('data'));
    }
    public function tambahinfo()
    {
        return view('ppdb.info.tambahinfo');
    }

    public function submitinfo(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi' =>'required',
        ],[
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = info::create([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admininfo')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editinfo($id){

        $data = info::findOrFail($id);
        return view('ppdb.info.editinfo', compact('data'));
    }

    public function prosesinfo(Request $request, $id){
        $this->validate($request,[
            'deskripsi' =>'required',
        ],[
            'deskripsi' =>'harus diisi',

        ]);
        $data = info::find($id);
        $data->update([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('admininfo')->with('success',' Data Berhasil di Ubah!');

    }

    public function deleteinfo($id){
        $data = info::find($id);
        $data->delete();
        return redirect('admininfo')->with('success',' Data Berhasil di Hapus!');
    }

























}


