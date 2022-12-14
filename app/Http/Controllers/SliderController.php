<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Fotoslider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
 



    public function fotoslideradmin(){
        $data2 = Fotoslider::all();
        $ss = Slider::all();
        $fs = Fotoslider::all();
        return view('slider.foto.foto-slider', compact('data2','ss','fs'));
    }
    public function tambahfotoslider()
    {
        return view('slider.foto.tambah-foto-slider');
    }

    public function fotosliderproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_slider' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:5000',
        ],[
            'foto_slider.required' =>'Harus diisi',
            'foto_slider.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data2 = Fotoslider::create([
            'foto_slider' =>$request->foto_slider,
        ]);
        if($request->hasFile('foto_slider')){
            $request->file('foto_slider')->move('fotomahasiswa/', $request->file('foto_slider')->getClientOriginalName());
            $data2->foto_slider = $request->file('foto_slider')->getClientOriginalName();
            $data2->save();
        }

        return redirect()->route('fotoslideradmin')->with('success',' Data Berhasil di Tambahkan!');
    }
    public function editfotoslider($id){

        $data2 = Fotoslider::findOrFail($id);
        return view('slider.foto.edit-foto-slider', compact('data2'));
    }

    public function prosesfotoslider(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:5000',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data2 = Fotoslider::find($id);
        $data2->update([
        ]);
        if($request->hasFile('foto_slider')){
            $request->file('foto_slider')->move('fotomahasiswa/',$request->file('foto_slider')->getClientOriginalName());
            $data2->foto_slider = $request->file('foto_slider')->getClientOriginalName();
            $data2->save();
        }

        return redirect('fotoslideradmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete2($id){
        $data2 = Fotoslider::find($id);
        $data2->delete();
        return redirect('fotoslideradmin')->with('success',' Data Berhasil di Hapus!');
    }
}
