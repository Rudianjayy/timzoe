<?php

namespace App\Http\Controllers;

use App\Models\Bsi;
use App\Models\Edotel;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Printing;
use App\Models\Pegadaian;
use App\Models\Suryamart;
use App\Models\upj;
use App\Models\upj1;
use App\Models\Footeerdua;
use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj()
    {
        $upj = upj::all();
        $u = upj::all();
        $p = upj::all();
        $j = upj::all();
        $upj1 = upj1::all();
        $upj2 = upj1::all();
        $pag = upj1::paginate(4);
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        return view('upj.indexupj', compact('f', 'kh', 'upj', 'u', 'p', 'j', 'upj1', 'upj2', 'pag'));
    }
    public function upj()
    {

        return view('upj.upj');
    }
    public function adminupj()
    {
        $data = upj::all();
        return view('upj.adminupj.adminupj', compact('data'));
    }
    public function tambahupj()
    {
        return view('upj.adminupj.tambahupj');
    }
    public function upjproses(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'judul1' => 'required',
            'judul2' => 'required',
            'judul3' => 'required',
        ], [
            'judul1.required' => 'Harus diisi',
            'judul2.required' => 'Harus diisi',
            'judul3.required' => 'Harus diisi',

        ]);
        $data = upj::create([
            'judul1' => $request->judul1,
            'judul2' => $request->judul2,
            'judul3' => $request->judul3,
            'foto_upjj' => $request->foto_upjj,
        ]);
        if ($request->hasFile('foto_upj')) {
            $request->file('foto_upj')->move('fotomahasiswa/', $request->file('foto_upj')->getClientOriginalName());
            $data->foto_upj = $request->file('foto_upj')->getClientOriginalName();
            $data->save();
        }


        return redirect()->route('adminupj')->with('success', ' Data Berhasil di Tambahkan!');
    }
    public function editupj($id)
    {

        $data = upj::findOrFail($id);
        return view('upj.adminupj.editupj', compact('data'));
    }

    public function editupjproses(Request $request, $id)
    {
        $this->validate($request, [
            'judul1' => 'required',
            'judul2' => 'required',
            'judul3' => 'required',
        ], [
            'judul1.required' => 'Harus diisi',
            'judul2.required' => 'Harus diisi',
            'judul3.required' => 'Harus diisi',

        ]);
        $data = upj::find($id);
        $data->update([
            'judul1' => $request->judul1,
            'judul2' => $request->judul2,
            'judul3' => $request->judul3,
        ]);
        if ($request->hasFile('foto_upjj')) {
            $request->file('foto_upjj')->move('fotomahasiswa/', $request->file('foto_upjj')->getClientOriginalName());
            $data->foto_upjj = $request->file('foto_upjj')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminupj')->with('success', ' Data Berhasil di Ubah!');
    }
    public function deleteupj($id)
    {
        $data = upj::find($id);
        $data->delete();
        return redirect('adminupj')->with('success', ' Data Berhasil di Hapus!');
    }









    public function adminupj2()
    {
        $data = upj1::all();
        return view('upj.adminupj2.adminupj2', compact('data'));
    }
    public function tambahupj2()
    {
        return view('upj.adminupj2.tambahupj2');
    }

    public function upjproses2(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'foto_upj' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'jasa_upj' => 'required',
            'icon_upj' => 'required',
        ], [
            'foto_upj.required' => 'Harus diisi',
            'foto_upj.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
            'jasa_upj.required' => 'Harus diisi',
            'icon_upj.required' => 'Harus diisi',
        ]);
        $data = upj1::create([
            'foto_upj' => $request->foto_upj,
            'jasa_upj' => $request->jasa_upj,
            'icon_upj' => $request->icon_upj,

        ]);
        if ($request->hasFile('foto_upj')) {
            $request->file('foto_upj')->move('fotomahasiswa/', $request->file('foto_upj')->getClientOriginalName());
            $data->foto_upj = $request->file('foto_upj')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminupj2')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    public function editupj2($id)
    {

        $data = upj1::findOrFail($id);
        return view('upj.adminupj2.editupj2', compact('data'));
    }
    public function editupjproses2(Request $request, $id)
    {
        $this->validate($request, [
            'jasa_upj' => 'required',
            'icon_upj' => 'required',
        ], [
            'jasa_upj.required' => 'Harus diisi',
            'icon_upj.required' => 'Harus diisi',

        ]);
        $data = upj1::find($id);
        $data->update([
            'jasa_upj' => $request->jasa_upj,
            'icon_upj' => $request->icon_upj,
        ]);
        if ($request->hasFile('foto_upj')) {
            $request->file('foto_upj')->move('fotomahasiswa/', $request->file('foto_upj')->getClientOriginalName());
            $data->foto_upj = $request->file('foto_upj')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminupj2')->with('success', ' Data Berhasil di Ubah!');
    }
    public function deleteupj2($id)
    {
        $data = upj::find($id);
        $data->delete();
        return redirect('adminupj2')->with('success', ' Data Berhasil di Hapus!');
    }







    public function indexbsi()
    {
        $bsi = Bsi::all();
        $data = Bsi::all();
        return view('upj.bsi.bsi', compact('bsi', 'data'));
    }

    public function loby8()
    {
        $data = Bsi::all();
        return view('upj.bsi.admin-bsi', compact('data'));
    }
    public function tambahbsi()
    {
        return view('upj.bsi.tambah-bsi');
    }

    public function submitdata8(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi_bsi' => 'required',
        ], [
            'deskripsi_bsi.required' => 'Harus diisi',

        ]);
        $data = Bsi::create([
            'deskripsi_bsi' => $request->deskripsi_bsi,
            'foto' => $request->foto,

        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminbsi')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editbsi($id)
    {

        $data = Bsi::findOrFail($id);
        return view('upj.bsi.edit-bsi', compact('data'));
    }

    public function submitedit8(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi_bsi' => 'required',
        ], [
            'deskripsi_bsi' => 'harus diisi',

        ]);
        $data = Bsi::find($id);
        $data->update([
            'deskripsi_bsi' => $request->deskripsi_bsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminbsi')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deletebsi($id)
    {
        $data = Bsi::find($id);
        $data->delete();
        return redirect('adminbsi')->with('success', ' Data Berhasil di Hapus!');
    }













    public function indexmuhiprint()
    {
        $print = Printing::all();
        $data2 = Printing::all();
        return view('upj.muhip.muhi-printing', compact('print', 'data2'));
    }

    public function loby9()
    {
        $data2 = Printing::all();
        return view('upj.muhip.admin-muhi-printing', compact('data2'));
    }
    public function tambahmuhiprint()
    {
        return view('upj.muhip.tambah-muhi-printing');
    }

    public function submitdata9(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi_muhiprint' => 'required',
        ], [
            'deskripsi_muhiprint.required' => 'Harus diisi',

        ]);
        $data2 = Printing::create([
            'deskripsi_muhiprint' => $request->deskripsi_muhiprint,
            'foto_muhiprint' => $request->foto_muhiprint,

        ]);
        if ($request->hasFile('foto_muhiprint')) {
            $request->file('foto_muhiprint')->move('fotomahasiswa/', $request->file('foto_muhiprint')->getClientOriginalName());
            $data2->foto_muhiprint = $request->file('foto_muhiprint')->getClientOriginalName();
            $data2->save();
        }

        return redirect()->route('adminmuhiprint')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editmuhiprint($id)
    {

        $data2 = Printing::findOrFail($id);
        return view('upj.muhip.edit-muhi-printing', compact('data2'));
    }

    public function submitedit9(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi_muhiprint' => 'required',
        ], [
            'deskripsi_muhiprint' => 'harus diisi',

        ]);
        $data2 = Printing::find($id);
        $data2->update([
            'deskripsi_muhiprint' => $request->deskripsi_muhiprint,
        ]);
        if ($request->hasFile('foto_muhiprint')) {
            $request->file('foto_muhiprint')->move('fotomahasiswa/', $request->file('foto_muhiprint')->getClientOriginalName());
            $data2->foto_muhiprint = $request->file('foto_muhiprint')->getClientOriginalName();
            $data2->save();
        }

        return redirect('adminmuhiprint')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deletemuhiprint($id)
    {
        $data2 = Printing::find($id);
        $data2->delete();
        return redirect('adminmuhiprint')->with('success', ' Data Berhasil di Hapus!');
    }










    public function indexpegadaian()
    {
        $gadai = Pegadaian::all();
        $data3 = Pegadaian::all();
        return view('upj.gadai.pegadaian', compact('gadai', 'data3'));
    }

    public function loby10()
    {
        $data3 = Pegadaian::all();
        return view('upj.gadai.admin-pegadaian', compact('data3'));
    }
    public function tambahpegadaian()
    {
        return view('upj.gadai.tambah-pegadaian');
    }

    public function submitdata10(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi_gadai' => 'required',
        ], [
            'deskripsi_gadai.required' => 'Harus diisi',

        ]);
        $data3 = Pegadaian::create([
            'deskripsi_gadai' => $request->deskripsi_gadai,
            'foto_gadai' => $request->foto_gadai,

        ]);
        if ($request->hasFile('foto_gadai')) {
            $request->file('foto_gadai')->move('fotomahasiswa/', $request->file('foto_gadai')->getClientOriginalName());
            $data3->foto_gadai = $request->file('foto_gadai')->getClientOriginalName();
            $data3->save();
        }

        return redirect()->route('adminpegadaian')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editpegadaian($id)
    {

        $data3 = Pegadaian::findOrFail($id);
        return view('upj.gadai.edit-pegadaian', compact('data3'));
    }

    public function submitedit10(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi_gadai' => 'required',
        ], [
            'deskripsi_gadai' => 'harus diisi',

        ]);
        $data3 = Pegadaian::find($id);
        $data3->update([
            'deskripsi_gadai' => $request->deskripsi_gadai,
        ]);
        if ($request->hasFile('foto_gadai')) {
            $request->file('foto_gadai')->move('fotomahasiswa/', $request->file('foto_gadai')->getClientOriginalName());
            $data3->foto_gadai = $request->file('foto_gadai')->getClientOriginalName();
            $data3->save();
        }

        return redirect('adminpegadaian')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deletepegadaian($id)
    {
        $data3 = Pegadaian::find($id);
        $data3->delete();
        return redirect('adminpegadaian')->with('success', ' Data Berhasil di Hapus!');
    }









    public function indexsuryamart()
    {
        $sm = Suryamart::all();
        $data4 = Suryamart::all();
        return view('upj.surya.suryamart', compact('sm', 'data4'));
    }

    public function loby11()
    {
        $data4 = Suryamart::all();
        return view('upj.surya.admin-suryamart', compact('data4'));
    }
    public function tambahsuryamart()
    {
        return view('upj.surya.tambah-suryamart');
    }

    public function submitdata11(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi_surya' => 'required',
        ], [
            'deskripsi_surya.required' => 'Harus diisi',

        ]);
        $data4 = Suryamart::create([
            'deskripsi_surya' => $request->deskripsi_surya,
            'foto_surya' => $request->foto_surya,

        ]);
        if ($request->hasFile('foto_surya')) {
            $request->file('foto_surya')->move('fotomahasiswa/', $request->file('foto_surya')->getClientOriginalName());
            $data4->foto_surya = $request->file('foto_surya')->getClientOriginalName();
            $data4->save();
        }

        return redirect()->route('adminsuryamart')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editsuryamart($id)
    {

        $data4 = Suryamart::findOrFail($id);
        return view('upj.surya.edit-suryamart', compact('data4'));
    }

    public function submitedit11(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi_surya' => 'required',
        ], [
            'deskripsi_surya' => 'harus diisi',

        ]);
        $data4 = Suryamart::find($id);
        $data4->update([
            'deskripsi_surya' => $request->deskripsi_surya,
        ]);
        if ($request->hasFile('foto_surya')) {
            $request->file('foto_surya')->move('fotomahasiswa/', $request->file('foto_surya')->getClientOriginalName());
            $data4->foto_surya = $request->file('foto_surya')->getClientOriginalName();
            $data4->save();
        }

        return redirect('adminsuryamart')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deletesuryamart($id)
    {
        $data4 = Suryamart::find($id);
        $data4->delete();
        return redirect('adminsuryamart')->with('success', ' Data Berhasil di Hapus!');
    }










    public function indexedotel()
    {
        $ed = Edotel::all();
        $data5 = Edotel::all();
        $link = footeerdua::all();
        return view('upj.edotel.edotel', compact('ed', 'data5', 'link'));
    }

    public function loby12()
    {
        $data5 = Edotel::all();
        return view('upj.edotel.admin-edotel', compact('data5'));
    }
    public function tambahedotel()
    {
        return view('upj.edotel.tambah-edotel');
    }

    public function submitdata12(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'deskripsi_edotel' => 'required',
        ], [
            'deskripsi_edotel.required' => 'Harus diisi',

        ]);
        $data5 = Edotel::create([
            'deskripsi_edotel' => $request->deskripsi_edotel,
            'foto_edotel' => $request->foto_edotel,

        ]);
        if ($request->hasFile('foto_edotel')) {
            $request->file('foto_edotel')->move('fotomahasiswa/', $request->file('foto_edotel')->getClientOriginalName());
            $data5->foto_edotel = $request->file('foto_edotel')->getClientOriginalName();
            $data5->save();
        }

        return redirect()->route('adminedotel')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editedotel($id)
    {

        $data5 = Edotel::findOrFail($id);
        return view('upj.edotel.edit-edotel', compact('data5'));
    }

    public function submitedit12(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi_edotel' => 'required',
        ], [
            'deskripsi_edotel' => 'harus diisi',

        ]);
        $data5 = Edotel::find($id);
        $data5->update([
            'deskripsi_edotel' => $request->deskripsi_edotel,
        ]);
        if ($request->hasFile('foto_edotel')) {
            $request->file('foto_edotel')->move('fotomahasiswa/', $request->file('foto_edotel')->getClientOriginalName());
            $data5->foto_edotel = $request->file('foto_edotel')->getClientOriginalName();
            $data5->save();
        }

        return redirect('adminedotel')->with('success', ' Data Berhasil di Ubah!');
    }

    public function deleteedotel($id)
    {
        $data5 = Edotel::find($id);
        $data5->delete();
        return redirect('adminedotel')->with('success', ' Data Berhasil di Hapus!');
    }
}
