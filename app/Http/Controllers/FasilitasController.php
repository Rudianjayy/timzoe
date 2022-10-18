<?php

namespace App\Http\Controllers;

use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\fasilitassekolah;
use App\Models\Personaljurusan;


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

        return view('fasilitassekolah.fasilitassekolah', compact('q','f','kh','personal','ft','logo'));

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
            'foto' => 'required',
            'foto.*' => 'required',
            'foto_sampul' => 'required',
            'judul_fasilitas' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto.required' => 'Harus diisi',
            'foto_sampul.required' => 'Harus diisi',
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_fasilitas.required' => 'Harus diisi',
            'deskripsi.required' => 'Harus diisi',

        ]);
        // dd($request->all());
        $no = 1;
        if ($request->file('foto')) {
            foreach ($request->file('foto') as $file) {
                $name =  time() . rand(1, 100) . $no++ . '.' . $file->extension();
                $file->move(public_path('files'), $name);
                $files[] = $name;
            }
            $file = implode(',', $files);
        }
        // $file = new fasilitassekolah();
        // $file->foto = $files;
        // $file->save();

        $data = fasilitassekolah::create([
            'foto' => $file,
            'foto_sampul' => $request->foto_sampul,
            'judul_fasilitas' => $request->judul_fasilitas,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotomahasiswa/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
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
            'foto' => 'required',
            'foto.*' => 'required',
            'foto_sampul' => 'required',
            'judul_fasilitas' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto.required' => 'Harus diisi',
            'foto_sampul.required' => 'Harus diisi',
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
            'judul_fasilitas.required' => 'Harus diisi',
            'deskripsi.required' => 'Harus diisi',

        ]);
        // dd($request->all());
        $no = 1;
        if ($request->file('foto')) {
            foreach ($request->file('foto') as $file) {
                $name =  time() . rand(1, 100) . $no++ . '.' . $file->extension();
                $file->move(public_path('files'), $name);
                $files[] = $name;
            }
            $file = implode(',', $files);
        }
        $data = fasilitassekolah::find($id);
        $data->update([
            'foto' => $file,
            'foto_sampul' => $request->foto_sampul,
            'judul_fasilitas' => $request->judul_fasilitas,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotomahasiswa/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
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
