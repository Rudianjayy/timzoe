<?php

namespace App\Http\Controllers;

use App\Models\Carapendaftaran;
use App\Models\Deskripsipendaftaran;
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
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $ab = biaya::all();
        $ac = syaratdaftar::all();
        $ar = kontak::all();
        $info = info::all();
        return view('ppdb.pendaftaran', compact('dp','pd','kontak','cp','ab','ac','ar','info'));
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
        $f = Muhinews::all();
        $kh = Jurusan::all();
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
        $f = Muhinews::all();
        $kh = Jurusan::all();
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $data3 = kontak::all();
        return view('ppdb.kontak.kontak', compact('f','kh','dp','pd','kontak','cp','data3'));
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






















    public function adminformulir(){
       $data4 = Formulir::all();
        return view('ppdb.formulir.formulir', compact('data4'));
    }

    public function tambahformulir()
    {
        return view('ppdb.formulir.tambah-formulir');
    }

    public function submitdata27(Request $request){
        $this->validate($request,[
            'nama' =>'required',
            'nama_email' =>'required',
            'notelpon' =>'required',
            'subjek' =>'required',
            'pesan' =>'required',

        ],[
            'nama.required' =>'Harus diisi',
            'nama_email.required' =>'Harus diisi',
            'notelpon.required' =>'Harus diisi',
            'subjek.required' =>'Harus diisi',
            'pesan.required' =>'Harus diisi',


        ]);
        $data4 = Formulir::create([
            'nama' =>$request->nama,
            'nama_email' =>$request->nama_email,
            'notelpon' =>$request->notelpon,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,

        ]);
        return redirect()->route('adminformulir')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function deleteformulir($id){
        $data4 = Formulir::find($id);
        $data4 ->delete();
        return redirect('adminformulir')->with('toast_error',' Data Berhasil di Hapus!');
    }









    public function biaya(){
        $ab = biaya::all();
        return view('ppdb.biaya.biaya');
    }



    public function adminbiaya() {
        $data = biaya::all();
        $us = biaya::all();
        $data3 = biaya::all();
        $ab = biaya::all();
        return view('ppdb.biaya.adminbiaya', compact('data','us','ab','data3'));
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

            'judul' =>$request->judul,
            'deskripsi' =>$request->deskripsi,
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
            'judul' =>'required',
            'deskripsi' =>'required',
            'gelombang' =>'required',
            'penjelas' =>'required',
            'jadwal' =>'required',

        ],[
            'judul.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',
            'gelombang.required' =>'Harus diisi',
            'penjelas.required' =>'Harus diisi',
            'jadwal.required' =>'Harus diisi',

        ]);
        $data3 = biaya::create([
            'judul' =>$request->judul,
            'deskripsi' =>$request->deskripsi,
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
            'judul' =>'required',
            'deskripsi' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = info::create([
            'foto' =>$request->foto,
            'judul' =>$request->judul,
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
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'judul' =>'required',
            'deskripsi' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul' =>'harus diisi',
            'deskripsi' =>'harus diisi',

        ]);
        $data = info::find($id);
        $data->update([
            'judul' =>$request->judul,
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


