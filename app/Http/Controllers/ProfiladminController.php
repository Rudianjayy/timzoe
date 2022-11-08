<?php

namespace App\Http\Controllers;

use App\Models\profiladmin;
use Illuminate\Http\Request;


class ProfiladminController extends Controller
{


 public function profiladmin()
    {
        $d = profiladmin::all();
        return view('profil.profiladmin', compact('d'));
    }


    // public function adminprofil()
    // {
    //     $data = profiladmin::all();
    //     return view('profil admin.adminprofil', compact('data'));
    // }
    // public function tambahprofiladmin()
    // {
    //     return view('profil admin.tambahprofiladmin');
    // }

    // public function submitprofil(Request $request)
    // {
    //     // dd($request->all());
    //     $this->validate($request, [
    //         'foto' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //     ], [
    //         'foto.required' => 'Harus diisi',
    //         'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
    //     ]);
    //     $data = profiladmin::create([
    //         'foto' => $request->foto,
    //     ]);
    //     if ($request->hasFile('foto')) {
    //         $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }

    //     return redirect()->route('profiladmin')->with('toast_success', ' Data Berhasil di Tambahkan!');
    // }

    // public function editprofiladmin($id)
    // {

    //     $data = profiladmin::findOrFail($id);
    //     return view('profil admin.editprofiladmin', compact('data'));
    // }

    // public function editproses(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'foto' => 'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //     ], [
    //         'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
    //     ]);
    //     $data = profiladmin::find($id);
    //     $data->update([]);
    //     if ($request->hasFile('foto')) {
    //         $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }

    //     return redirect('profiladmin')->with('toast_success', ' Data Berhasil di Ubah!');
    // }

    // public function deleteprofiladmin($id)
    // {
    //     $data = profiladmin::find($id);
    //     $data->delete();
    //     return redirect('profiladmin')->with('toast_error', ' Data Berhasil di Hapus!');
    // }
}
