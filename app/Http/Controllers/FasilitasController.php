<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;
use App\Models\fasilitassekolah;
use App\Models\fotofasilitas;

class FasilitasController extends Controller
{
    public function fasilitassekolah()
    {
        $jud = fasilitassekolah::with('judulfasilitas')->get();
        $q = fasilitassekolah::paginate(4);
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        $logo= footeer::all();

        return view('fasilitassekolah.fasilitassekolah', compact('q','f','kh','logo','jud'));

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
        $judul = fasilitas::all();
        return view('fasilitassekolah.crudfasilitassekolah.tambahfasilitas',compact('judul'));
    }

    public function prosesfasilitas(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [

            'foto_sampul' => 'required',
            'fasilitas_id' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto_sampul.required' => 'Harus diisi',
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
            'fasilitas_id.required' => 'Harus diisi',
            'deskripsi.required' => 'Harus diisi',

        ]);


        $data = fasilitassekolah::create([
            'foto' => $request->foto,
            'foto_sampul' => $request->foto_sampul,
            'fasilitas_id' => $request->fasilitas_id,
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

        $data = fasilitassekolah::find($id);
        $data->update([
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

        return redirect('fasilitasadmin')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function deletefasilitas($id)
    {
        $data = fasilitassekolah::find($id);
        $data->delete();
        return redirect('fasilitasadmin')->with('toast_error', ' Data Berhasil di Hapus!');
    }








    public function judulfasilitas()
    {
        $data = fasilitas::all();
        return view('fasilitassekolah.crudfasilitassekolah.judulfasilitas',compact('data'));
    }
    public function tambahjudul()
    {
        return view('fasilitassekolah.crudfasilitassekolah.tambahjudul');
    }

    public function prosesjudul(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'judulfasilitas' => 'required',

        ], [
            'judulfasilitas.required' => 'Harus diisi',
        ]);

        $data = fasilitas::create([
            'judulfasilitas' => $request->judulfasilitas,
        ]);

        return redirect('judulfasilitas')->with('toast_success', ' Data Berhasil di tambahkan!');
    }









    public function fotofasilitas()
    {
        $data = fotofasilitas::all();
        return view('fasilitassekolah.crudfasilitassekolah.fotofasilitas',compact('data'));
    }
    public function tambahfotofasilitas()
    {
        return view('fasilitassekolah.crudfasilitassekolah.tambahfotofasilitas');
    }

    public function prosesfoto(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'foto' => 'required',

        ], [
            'foto.required' => 'Harus diisi',
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',


        ]);

        $data = fotofasilitas::create([
            'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('fotofasilitas')->with('toast_success', ' Data Berhasil di tambahkan!');
    }
    public function editfotofasilitas($id)
    {

        $data = fasilitassekolah::findOrFail($id);
        return view('fasilitassekolah.crudfasilitassekolah.editfasilitas', compact('data'));
    }

    public function editprosesfoto(Request $request, $id)
    {
        $this->validate($request, [
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

        $data = fasilitassekolah::find($id);
        $data->update([
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

    public function deletefotofasilitas($id)
    {
        $data = fotofasilitas::find($id);
        $data->delete();
        return redirect('fotofasilitas')->with('toast_error', ' Data Berhasil di Hapus!');
    }

}
