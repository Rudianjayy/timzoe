<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Fotoslider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slideradmin(){
        $data = Slider::all();
        $ss = Slider::all();
        return view('slider.slider-admin', compact('data','ss'));
    }
    public function editslider($id){

        $data = Slider::findOrFail($id);
        return view('slider.edit-slider', compact('data'));
    }

    public function prosesslider(Request $request, $id){
        $this->validate($request,[
            'deskripsi1_slider' =>'required',
            'deskripsi2_slider' =>'required',
            'deskripsi3_slider' =>'required',
        ],[
            'deskripsi1_slider' =>'harus diisi',
            'deskripsi2_slider' =>'harus diisi',
            'deskripsi3_slider' =>'harus diisi',


        ]);
        $data = Slider::find($id);
        $data->update([
            'deskripsi1_slider' =>$request->deskripsi1_slider,
            'deskripsi2_slider' =>$request->deskripsi2_slider,
            'deskripsi3_slider' =>$request->deskripsi3_slider,

        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('slideradmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data = Slider::find($id);
        $data->delete();
        return redirect('slideradmin')->with('toast_error',' Data Berhasil di Hapus!');
    }



















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
            'foto_slider' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
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

        return redirect()->route('fotoslideradmin')->with('toast_success',' Data Berhasil di Tambahkan!');
    }
    public function editfotoslider($id){

        $data2 = Fotoslider::findOrFail($id);
        return view('slider.foto.edit-foto-slider', compact('data2'));
    }

    public function prosesfotoslider(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
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

        return redirect('fotoslideradmin')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function delete2($id){
        $data2 = Fotoslider::find($id);
        $data2->delete();
        return redirect('fotoslideradmin')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
