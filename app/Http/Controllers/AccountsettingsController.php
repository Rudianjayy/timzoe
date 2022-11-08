<?php

namespace App\Http\Controllers;

use App\Models\accountsettings;
use Illuminate\Http\Request;

class AccountsettingsController extends Controller
{
    public function accountsettings()
    {
        $d = accountsettings::all();
        return view('account settings.accountsettings', compact('d'));
    }


    public function adminaccountsettings()
    {
        $data = accountsettings::all();
        return view('account settings.adminaccountsettings', compact('data'));
    }
//     public function tambahaccountsettings()
//     {
//         return view('account settings.tambahaccountsettings');
//     }

//     public function submitprofil(Request $request)
//     {
//         // dd($request->all());
//         $this->validate($request, [
//             'foto' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
//         ], [
//             'foto.required' => 'Harus diisi',
//             'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
//         ]);
//         $data = accountsettings::create([
//             'foto' => $request->foto,
//         ]);
//         if ($request->hasFile('foto')) {
//             $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
//             $data->foto = $request->file('foto')->getClientOriginalName();
//             $data->save();
//         }

//         return redirect()->route('accountsettings')->with('toast_success', ' Data Berhasil di Tambahkan!');
//     }

//     public function editaccountsettings($id)
//     {

//         $data = accountsettings::findOrFail($id);
//         return view('account settings.editaccountsettings', compact('data'));
//     }

//     public function editproses(Request $request, $id)
//     {
//         $this->validate($request, [
//             'foto' => 'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
//         ], [
//             'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
//         ]);
//         $data = accountsettings::find($id);
//         $data->update([]);
//         if ($request->hasFile('foto')) {
//             $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
//             $data->foto = $request->file('foto')->getClientOriginalName();
//             $data->save();
//         }

//         return redirect('accountsettings')->with('toast_success', ' Data Berhasil di Ubah!');
//     }

//     public function deleteaccountsettings($id)
//     {
//         $data = accountsettings::find($id);
//         $data->delete();
//         return redirect('accountsettings')->with('toast_error', ' Data Berhasil di Hapus!');
//     }
// }
}
