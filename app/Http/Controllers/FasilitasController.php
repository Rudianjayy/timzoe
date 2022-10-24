<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\fasilitassekolah;
use App\Models\fotofasilitas;
use App\Models\personaljurusan;

class FasilitasController extends Controller
{
    public function fasilitassekolah()
    {
        $q = fasilitassekolah::paginate(4);
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        $personal = personaljurusan::all();
        $ft = Footeer::all();
        $logo = footeer::all();

        return view('fasilitassekolah.fasilitassekolah', compact('q','f','kh','logo'));

    }
    public function detailfoto($id)
    {
        $detailfoto = fasilitassekolah::findOrFail($id);
        return view('fasilitassekolah.detailfoto', compact('detailfoto'));
    }
    public function fasilitasadmin()
    {
        $data = fasilitassekolah::all();
        return view('fasilitassekolah.crudfasilitassekolah.fasilitasadmin', compact('data'));
    }
    public function tambahfasilitas()
    {
        return view('fasilitassekolah.crudfasilitassekolah.tambahfasilitas');
    }

    public function prosesfasilitas(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [

            'foto_sampul' => 'required',
            'judul_fasilitas' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto_sampul.required' => 'Harus diisi',
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_fasilitas.required' => 'Harus diisi',
            'deskripsi.required' => 'Harus diisi',

        ]);


        $data = fasilitassekolah::create([
            'foto' => $request->foto,
            'foto_sampul' => $request->foto_sampul,
            'judul_fasilitas' => $request->judul_fasilitas,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotomahasiswa/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('fasilitasadmin')->with('toast_success', ' Data Berhasil di tambahkan!');
    }



    public function editfasilitas($id)
    {

        $data = fasilitassekolah::findOrFail($id);
        return view('fasilitassekolah.crudfasilitassekolah.editfasilitas', compact('data'));
    }

    public function editprosesfasilitas(Request $request, $id)
    {
        $this->validate($request, [
            'judul_fasilitas' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul_fasilitas.required' => 'Harus diisi',
            'deskripsi.required' => 'Harus diisi',

        ]);
        // dd($request->all());

        $data = fasilitassekolah::find($id);
        $data->update([
            'judul_fasilitas' => $request->judul_fasilitas,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotomahasiswa/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('fasilitasadmin')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function deletefasilitas($id)
    {
        $data = fasilitassekolah::find($id);
        $data->delete();
        return redirect('fasilitasadmin')->with('toast_error', ' Data Berhasil di Hapus!');
    }

}
