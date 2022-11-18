<?php

namespace App\Http\Controllers;

use App\Models\Carapendaftaran;
use App\Models\Deskripsipendaftaran;
use App\Models\Formulir;
use App\Models\syaratdaftar;
use App\Models\kontak;
use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function pendaftaran(){
        $f = Muhinews::all();
        $kh = Jurusan::all();
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        return view('ppdb.pendaftaran', compact('f','kh','dp','pd','kontak','cp'));
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
        return view('ppdb.syarat.syaratdaftar', compact('f','kh','dp','pd','kontak','cp'));
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

    public function submitedit12(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data = Deskripsipendaftaran::find($id);
        $data->update([

            'deskripsi' =>$request->deskripsi,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);

        return redirect('syaratdaftar')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function tambahsyaratdaftar()
    {
        return view('ppdb.syarat.tambahsyaratdaftar');
    }

    public function submitproses12(Request $request){
        $this->validate($request,[
            'deskripsi' =>'required',
            'deskripsi_detail' =>'required',

        ],[
            'deskripsi.required' =>'Harus diisi',
            'deskripsi_detail.required' =>'Harus diisi',
        ]);
        $data2 = syaratdaftar::create([
            'deskripsi' =>$request->deskripsi,
            'deskripsi_detail' =>$request->deskripsi_detail,
        ]);
        return redirect()->route('syaratdaftar')->with('success',' Data Berhasil di Tambahkan!');
    }


    public function deletesyaratdaftar($id){
        $data = Deskripsipendaftaran::find($id);
        $data->delete();
        return redirect('syaratdaftar')->with('toast_error',' Data Berhasil di Hapus!');
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



    public function adminkontak() {
        $data = Deskripsipendaftaran::all();
        $us = Deskripsipendaftaran::all();
        $data3 = kontak::all();
        return view('ppdb.kontak.adminkontak', compact('data','us','data3'));
    }

    public function editkontak($id){

        $data3 = kontak::findOrFail($id);
        return view('ppdb.kontak.editkontak', compact('data3'));
    }

    public function editproses14(Request $request, $id){
        $this->validate($request,[
        ],[

        ]);
        $data = Deskripsipendaftaran::find($id);
        $data->update([

            'nama' =>$request->nama,
            'namaemail' =>$request->namaemail,
            'notelpon' =>$request->notelpon,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,

        ]);

        return redirect('deskripsipendaftaran')->with('toast_success',' Data Berhasil di Ubah!');

    }


    public function tambahkontak()
    {
        return view('ppdb.kontak.tambahkontak');
    }

    public function submitproses14(Request $request){
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
        $data3 = kontak::create([
            'nama' =>$request->nama,
            'nama_email' =>$request->nama_email,
            'notelpon' =>$request->notelpon,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,

        ]);
        return redirect()->route('deskripsipendaftaran')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function deletekontak($id){
        $data = Deskripsipendaftaran::find($id);
        $data->delete();
        return redirect('deskripsipendaftaran')->with('toast_error',' Data Berhasil di Hapus!');
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



}
