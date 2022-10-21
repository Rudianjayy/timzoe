<?php

namespace App\Http\Controllers;

use App\Models\footeerdua;

use Illuminate\Http\Request;

class FooteerduaController extends Controller
{
    public function adminfooteerdua(){
        $data = footeerdua::all();
        return view('footeer.footeerdua.adminfooteerdua', compact('data'));
    }
    public function tambahfooteerdua()
    {
        return view('footeer.footeerdua.tambahfooteerdua');
    }

    public function footeerprosesdua(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul' =>'required',
            'link' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'link.required' =>'Harus diisi',

        ]);
        $data = footeerdua::create([
            'judul' =>$request->judul,
            'link' =>$request->link,
        ]);
       
        return redirect()->route('adminfooteerdua')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editfooteerdua($id){

        $data = footeerdua::findOrFail($id);
        return view('footeer.footeerdua.editfooteerdua', compact('data'));
    }

    public function editprosesdua(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'link' =>'required',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
            'link' =>'harus diisi',

        ]);
        $data = footeerdua::find($id);
        $data->update([
            'link' =>$request->link,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminfooteerdua')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = footeerdua::find($id);
        $data->delete();
        return redirect('adminfooteerdua')->with('toast_error',' Data Berhasil di Hapus!');
    }

}
