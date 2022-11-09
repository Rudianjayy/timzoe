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

    public function admin()
    {
        $data = profiladmin::all();
        return view('profil.admin', compact('data'));
    }



    public function editprofiladmin($id)
    {

        $data = profiladmin::findOrFail($id);
        return view('profil.editprofiladmin', compact('data'));
    }

    public function editprosesadmin(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ], [
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
        ]);
        $data = profiladmin::find($id);
        $data->update([]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('profiladmin')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function deleteprofiladmin($id)
    {
        $data = profiladmin::find($id);
        $data->delete();
        return redirect('profiladmin')->with('toast_error', ' Data Berhasil di Hapus!');
    }
}
