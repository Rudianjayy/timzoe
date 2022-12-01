<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\biaya;
use App\Models\kontak;
use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Payment;
use App\Models\Formulir;
use App\Models\Muhinews;
use App\Models\mitrappdb;
use App\Models\Footeerdua;
use App\Models\syaratdaftar;
use Illuminate\Http\Request;
use App\Models\Carapendaftaran;
use App\Models\Langkahpendaftaran;
use App\Models\Deskripsipendaftaran;
use Illuminate\Support\Facades\Auth;


class PpdbController extends Controller
{
    public function pendaftaran()
    {
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $footerppdb = footeer::all();
        $footerlink = Footeerdua::all();
        $info = info::all();
        $biaya = biaya::all();
        $langkah = Langkahpendaftaran::all();
        $total = Formulir::count();
        $formulir = Formulir::where('status', '=', 'diterima')->count();
        $formulird = Formulir::where('status', '=', 'ditolak')->count();
        $formulirp = Formulir::where('status', '=', 'pending')->count();
        return view('ppdb.pendaftaran', compact('dp', 'pd', 'kontak', 'cp', 'footerppdb', 'info', 'biaya', 'langkah', 'footerlink', 'formulir', 'formulird', 'total', 'formulirp'));
    }

    public function snap(Request $request)
    {
        // dd((int) $request->biaya, $request->biaya_gelombang, $request->biaya_id);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-RcFqJE4B66H7TmdNUajirjjK';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => (int) $request->biaya,
            ),
            'item_details' => array(
                [
                    'id' => $request->biaya_id,
                    'price' => (int) $request->biaya,
                    'quantity' => 1,
                    'name' => "gel",
                ],
            ),
            'customer_details' => array(
                'first_name' => "Rudi",
                // 'email' => $request->user_email,
                // 'phone' => $request->user_notelpon,
            ),
        );

        // dd($params, (int) $request->biaya, $request->biaya_gelombang, $request->biaya_id);

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return view('ppdb.pendaftaran' ,['snapToken' => $snapToken]);
        return response()->json([
            'snap' => $snapToken,
            'biaya' => $request->biaya_id

        ]);
    }

    public function payment_post(Request $request)
    {
        $json = json_decode($request->get('json'));
        // dd($request);

        $order = new Payment();
        // $order->id_user = Auth::user()->id;
        $order->id_biaya = $request->biaya_ids;
        $order->status = isset($json->transaction_status) ? $json->transaction_status : null;
        $order->transaction_id = isset($json->transaction_id) ? $json->transaction_id : null;
        $order->order_id = isset($json->order_id) ? $json->order_id : null;
        $order->gross_amount = isset($json->gross_amount) ? $json->gross_amount : null;
        $order->payment_type =  isset($json->payment_type) ? $json->payment_type : null;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        return $order->save() ? redirect(url('/'))->with('alert-success', 'Berhasil Berlangganan') : redirect(url('/'))->with('alert-failed', 'Terjadi Kesalahan');
    }



    public function loby24()
    {
        $data = Deskripsipendaftaran::all();
        $us = Deskripsipendaftaran::all();
        return view('ppdb.deskripsi.deskripsi-pendaftaran', compact('data', 'us'));
    }

    public function editdeskripsipendaftaran($id)
    {

        $data = Deskripsipendaftaran::findOrFail($id);
        return view('ppdb.deskripsi.edit-deskripsi', compact('data'));
    }

    public function submitedit24(Request $request, $id)
    {
        $this->validate($request, [], []);
        $data = Deskripsipendaftaran::find($id);
        $data->update([
            'judul_slider' => $request->judul_slider,
            'deskripsi_slider' => $request->deskripsi_slider,
            'deskripsi_pendaftaran' => $request->deskripsi_pendaftaran,
            'deskripsi_kontak' => $request->deskripsi_kontak,
        ]);

        return redirect('deskripsipendaftaran')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function deletedeskripsipendaftaran($id)
    {
        $data = Deskripsipendaftaran::find($id);
        $data->delete();
        return redirect('deskripsipendaftaran')->with('toast_error', ' Data Berhasil di Hapus!');
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















    public function syaratdaftar()
    {
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $data2 = syaratdaftar::all();
        $ab = biaya::all();

        return view('ppdb.syarat.syaratdaftar', compact('f', 'kh', 'dp', 'pd', 'kontak', 'cp', 'data2', 'ab'));
    }



    public function adminsyaratdaftar()
    {
        $data = Deskripsipendaftaran::all();
        $us = Deskripsipendaftaran::all();
        $data2 = syaratdaftar::all();
        return view('ppdb.syarat.adminsyaratdaftar', compact('data', 'us', 'data2'));
    }

    public function editsyaratdaftar($id)
    {

        $data = Deskripsipendaftaran::findOrFail($id);
        return view('ppdb.syarat.editsyaratdaftar', compact('data'));
    }

    public function prosesdaftar(Request $request, $id)
    {
        $this->validate($request, [], []);
        $data = Deskripsipendaftaran::find($id);
        $data->update([

            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('adminsyaratdaftar')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function tambahsyaratdaftar()
    {
        return view('ppdb.syarat.tambahsyaratdaftar');
    }

    public function submitproses12(Request $request)
    {
        $this->validate($request, [
            'deskripsi' => 'required',

        ], [
            'deskripsi.required' => 'Harus diisi',
        ]);
        $data2 = syaratdaftar::create([
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('adminsyaratdaftar')->with('success', ' Data Berhasil di Tambahkan!');
    }


    public function deletedaftar($id)
    {
        $data = syaratdaftar::find($id);
        $data->delete();
        return redirect('adminsyaratdaftar')->with('toast_error', ' Data Berhasil di Hapus!');
    }









    public function kontak()
    {
        $dp = Deskripsipendaftaran::all();
        $pd = Deskripsipendaftaran::all();
        $kontak = Deskripsipendaftaran::all();
        $cp = Carapendaftaran::all();
        $data3 = kontak::all();
        return view('ppdb.kontak.kontak', compact('dp', 'pd', 'kontak', 'cp', 'data3'));
    }

    public function submitproses14(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'nama' => 'required',
            'namaemail' => 'required',
            'notelpon' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',

        ], [
            'nama.required' => 'Harus diisi',
            'namaemail.required' => 'Harus diisi',
            'notelpon.required' => 'Harus diisi',
            'subjek.required' => 'Harus diisi',
            'pesan.required' => 'Harus diisi',


        ]);
        $data = kontak::create([
            'nama' => $request->nama,
            'namaemail' => $request->namaemail,
            'notelpon' => $request->notelpon,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,

        ]);
        if ($request->hasFile('foto_kontak')) {
            $request->file('foto_kontak')->move('fotomahasiswa/', $request->file('foto_kontak')->getClientOriginalName());
            $data->foto_kontak = $request->file('foto_kontak')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kontakadmin')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editkontak($id)
    {

        $data = kontak::findOrFail($id);
        return view('ppdb.kontak.editkontak', compact('data'));
    }

    public function editproses14(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'namaemail' => 'required',
            'notelpon' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',
        ], [
            'nama.required' => 'Harus diisi',
            'namaemail.required' => 'Harus diisi',
            'notelpon.required' => 'Harus diisi',
            'subjek.required' => 'Harus diisi',
            'pesan.required' => 'Harus diisi',



        ]);
        $data = kontak::find($id);
        $data->update([
            'nama' => $request->nama,
            'namaemail' => $request->namaemail,
            'notelpon' => $request->notelpon,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);
        if ($request->hasFile('foto_kontak')) {
            $request->file('foto_kontak')->move('fotomahasiswa/', $request->file('foto_kontak')->getClientOriginalName());
            $data->foto_kontak = $request->file('foto_kontak')->getClientOriginalName();
            $data->save();
        }
        return redirect('kontakadmin')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deletekontak($id)
    {
        $data = kontak::find($id);
        $data->delete();
        return redirect('kontakadmin')->with('success', ' Data Berhasil di Hapus!');
    }






















    public function adminformulir()
    {
        $data4 = Formulir::where('status', '=', 'pending')->get();
        return view('ppdb.formulir.formulir', compact('data4'));
    }
    public function adminformulirditerima()
    {
        $data4 = Formulir::where('status', '=', 'diterima')->get();
        return view('ppdb.formulir.formulir-diterima', compact('data4'));
    }
    public function adminformulirditolak()
    {
        $data4 = Formulir::where('status', '=', 'ditolak')->get();
        return view('ppdb.formulir.formulir-ditolak', compact('data4'));
    }
    public function userformulir()
    {
        $data4 = Formulir::all();
        return view('ppdb.formulir.formulir-user', compact('data4'));
    }


    public function setuju(Request $request, $id)
    {
        $data = Formulir::find($id);
        $data->update([
            'status' => 'diterima',
            'barcode' => $request->nisn,
        ]);
        return redirect()->back()->with('success', 'status berhasil diubah');
    }

    public function tolak($id)
    {
        $data = Formulir::find($id);
        $data->update([
            'status' => 'ditolak',
        ]);
        return redirect()->back()->with('success', 'status berhasil diubah');
    }

    public function tambahformulir()
    {
        return view('ppdb.formulir.tambah-formulir');
    }

    public function submitdata27(Request $request)
    {
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
            'id_user' => Auth::User()->id,
            'nama_peserta' => $request->nama_peserta,
            'jeniskelamin' => $request->jeniskelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'nisn' => $request->nisn,
            'nik' => $request->nik,
            'nokk' => $request->nokk,
            'foto_kk' => $request->foto_kk,
            'foto_bukti' => $request->foto_bukti,
            'status_anak' => $request->status_anak,
            'alamat_rumah' => $request->alamat_rumah,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'sekolah_asal' => $request->sekolah_asal,
            'notelpon_siswa' => $request->notelpon_siswa,
            'notelpon_orangtua' => $request->notelpon_orangtua,
            'prestasi' => $request->prestasi,
            'ukuran_kaos' => implode(',', $request->ukuran_kaos),
            'jurusan' => $request->jurusan,
            'status' => 'pending',

        ]);

        // dd($request);
        if ($request->hasFile('foto_kk')) {
            $request->file('foto_kk')->move('fotomahasiswa/', $request->file('foto_kk')->getClientOriginalName());
            $data4->foto_kk = $request->file('foto_kk')->getClientOriginalName();
            $data4->save();
        }
        if ($request->hasFile('foto_bukti')) {
            $request->file('foto_bukti')->move('fotomahasiswa/', $request->file('foto_bukti')->getClientOriginalName());
            $data4->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
            $data4->save();
        }
        return redirect()->route('userformulir')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function deleteformulir($id)
    {
        $data4 = Formulir::find($id);
        $data4->delete();
        return redirect('adminformulir')->with('toast_error', ' Data Berhasil di Hapus!');
    }








    // public function bayaruser()
    // {
    //     $pricing = biaya::all();
    //     return view('ppdb.bayardaftar.bayar-user',compact('pricing'));
    // }




    public function adminbiaya()
    {
        $data3 = biaya::all();
        return view('ppdb.biaya.adminbiaya', compact('data3'));
    }

    public function editbiaya($id)
    {

        $data3 = biaya::findOrFail($id);
        return view('ppdb.biaya.editbiaya', compact('data3'));
    }

    public function editprosesbiaya1(Request $request, $id)
    {
        $this->validate($request, [], []);
        $data = biaya::find($id);
        $data->update([

            'gelombang' => $request->gelombang,
            'penjelas' => $request->penjelas,
            'jadwal_mulai' => $request->jadwal_mulai,
            'jadwal_ditutup' => $request->jadwal_ditutup,

        ]);

        return redirect('adminbiaya')->with('toast_success', ' Data Berhasil di Ubah!');
    }


    public function tambahbiaya()
    {
        return view('ppdb.biaya.tambahbiaya');
    }

    public function submitprosesbiaya(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'gelombang' => 'required',
            'penjelasan' => 'required',
            'jadwal_mulai' => 'required',
            'jadwal_ditutup' => 'required',
        ], [
            'gelombang.required' => 'Harus diisi',
            'penjelasan.required' => 'Harus diisi',
            'jadwal_mulai.required' => 'Harus diisi',
            'jadwal_ditutup.required' => 'Harus diisi',

        ]);
        $data3 = biaya::create([
            'gelombang' => $request->gelombang,
            'penjelasan' => $request->penjelasan,
            'jadwal_mulai' => $request->jadwal_mulai,
            'jadwal_ditutup' => $request->jadwal_ditutup,           
             'biaya' => $request->biaya,
            // dd($request->biaya)

        ]);
        return redirect()->route('adminbiaya')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function deletebiaya($id)
    {
        $data = biaya::find($id);
        $data->delete();
        return redirect('adminbiaya')->with('toast_error', ' Data Berhasil di Hapus!');
    }












    public function admininfo()
    {
        $data = info::all();
        return view('ppdb.info.admininfo', compact('data'));
    }
    public function tambahinfo()
    {
        return view('ppdb.info.tambahinfo');
    }

    public function submitinfo(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi' => 'required',
        ], [
            'deskripsi.required' => 'Harus diisi',

        ]);
        $data = info::create([
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admininfo')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editinfo($id)
    {

        $data = info::findOrFail($id);
        return view('ppdb.info.editinfo', compact('data'));
    }

    public function prosesinfo(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
        ], [
            'deskripsi' => 'harus diisi',

        ]);
        $data = info::find($id);
        $data->update([
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('admininfo')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deleteinfo($id)
    {
        $data = info::find($id);
        $data->delete();
        return redirect('admininfo')->with('success', ' Data Berhasil di Hapus!');
    }
















    public function adminlangkah()
    {
        $langkah = Langkahpendaftaran::all();
        return view('ppdb.langkahpendaftaran.adminlangkah', compact('langkah'));
    }
    public function tambahlangkah()
    {
        $langkah = Langkahpendaftaran::all();
        return view('ppdb.langkahpendaftaran.tambahlangkah', compact('langkah'));
    }
    public function prosestambahlangkah(Request $request)
    {
        $this->validate($request, [
            'judul_langkah' => 'required',
            'deskripsi_langkah' => 'required',
        ], [
            'judul_langkah' => 'harus diisi',
            'deskripsi_langkah' => 'harus diisi',
        ]);
        $langkah = Langkahpendaftaran::create([
            'judul_langkah' => $request->judul_langkah,
            'deskripsi_langkah' => $request->deskripsi_langkah,
        ]);
        return redirect()->route('adminlangkah')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function editlangkah($id)
    {
        $langkah = Langkahpendaftaran::findOrFail($id);
        return view('ppdb.langkahpendaftaran.editlangkah', compact('langkah'));
    }
    public function proseseditlangkah(Request $request, $id)
    {
        $langkah = Langkahpendaftaran::find($id);
        $langkah->update([
            'judul_langkah' => $request->judul_langkah,
            'deskripsi_langkah' => $request->deskripsi_langkah,
        ]);
        return redirect()->route('adminlangkah')->with('success', 'Data Berhasil Di Edit');
    }

    public function deletelangkah($id)
    {
        $langkah = Langkahpendaftaran::find($id);
        $langkah->delete();
        return redirect()->route('adminlangkah')->with('success', 'Data Berhasil Di Hapus');
    }
}
