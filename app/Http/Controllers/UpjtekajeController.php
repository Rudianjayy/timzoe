<?php

namespace App\Http\Controllers;

use App\Models\Teamupjtekaje;
use App\Models\Upjkeunggulan;
use Illuminate\Http\Request;
use App\Models\Upjtentangkami;

class UpjtekajeController extends Controller
{

    public function upj() {
        $tentang = Upjtentangkami::all();
        $upjt = Upjtentangkami::all();
        $team = Teamupjtekaje::all();
        $keunggulan = Upjkeunggulan::all();
        return view('upj.upj', compact('tentang','upjt','team','keunggulan'));
    }



    public function loby13() {
        $data = Upjtentangkami::all();
        return view('upjtekaje.tentangkami.tentang-kami', compact('data'));
    }
    public function tambahtentangkami()
    {
        return view('upjtekaje.tentangkami.tambah-tentang-kami');
    }

    public function submitdata13(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi_tentangkami' =>'required',
        ],[
            'deskripsi_tentangkami.required' =>'Harus diisi',

        ]);
        $data = Upjtentangkami::create([
            'deskripsi_tentangkami' =>$request->deskripsi_tentangkami,
            'foto_tentangkami' =>$request->foto_tentangkami,

        ]);
        if($request->hasFile('foto_tentangkami')){
            $request->file('foto_tentangkami')->move('fotomahasiswa/', $request->file('foto_tentangkami')->getClientOriginalName());
            $data->foto_tentangkami = $request->file('foto_tentangkami')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('tentangkami')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function edittentangkami($id){

        $data = Upjtentangkami::findOrFail($id);
        return view('upjtekaje.tentangkami.edit-tentang-kami', compact('data'));
    }

    public function submitedit13(Request $request, $id){
        $this->validate($request,[
            'deskripsi_tentangkami' =>'required',
        ],[
            'deskripsi_tentangkami' =>'harus diisi',

        ]);
        $data = Upjtentangkami::find($id);
        $data->update([
            'deskripsi_tentangkami' =>$request->deskripsi_tentangkami,
        ]);
        if($request->hasFile('foto_tentangkami')){
            $request->file('foto_tentangkami')->move('fotomahasiswa/',$request->file('foto_tentangkami')->getClientOriginalName());
            $data->foto_tentangkami = $request->file('foto_tentangkami')->getClientOriginalName();
            $data->save();
        }

        return redirect('tentangkami')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletetentangkami($id){
        $data = Upjtentangkami::find($id);
        $data->delete();
        return redirect('tentangkami')->with('toast_error',' Data Berhasil di Hapus!');
    }











    public function loby15() {
        $data2 = Teamupjtekaje::all();
        return view('upjtekaje.team.admin-team', compact('data2'));
    }
    public function tambahteam()
    {
        return view('upjtekaje.team.tambah-team');
    }

    public function submitdata15(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_team' =>'required',
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'foto_team.required' =>'Harus diisi',
            'nama_team.required' =>'Harus diisi',
            'jabatan_team.required' =>'Harus diisi',
            'fb.required' =>'Harus diisi',
            'wa.required' =>'Harus diisi',
            'ig.required' =>'Harus diisi',

        ]);
        $data2 = Teamupjtekaje::create([
            'foto_team' =>$request->foto_team,
            'nama_team' =>$request->nama_team,
            'jabatan_team' =>$request->jabatan_team,
            'fb' =>$request->fb,
            'wa' =>$request->wa,
            'ig' =>$request->ig,

        ]);
        if($request->hasFile('foto_team')){
            $request->file('foto_team')->move('fotomahasiswa/', $request->file('foto_team')->getClientOriginalName());
            $data2->foto_team = $request->file('foto_team')->getClientOriginalName();
            $data2->save();
        }

        return redirect()->route('adminteam')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editteam($id){

        $data2 = Teamupjtekaje::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data2'));
    }

    public function submitedit15(Request $request, $id){
        $this->validate($request,[
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'nama_team' =>'harus diisi',
            'jabatan_team' =>'harus diisi',
            'fb_team' =>'harus diisi',
            'wa_team' =>'harus diisi',
            'ig_team' =>'harus diisi',

        ]);
        $data2 = Teamupjtekaje::find($id);
        $data2->update([
            'nama_team' =>$request->nama_team,
            'jabatan_team' =>$request->jabatan_team,
            'fb' =>$request->fb,
            'wa' =>$request->wa,
            'ig' =>$request->ig,
        ]);
        if($request->hasFile('foto_team')){
            $request->file('foto_team')->move('fotomahasiswa/',$request->file('foto_team')->getClientOriginalName());
            $data2->foto_team = $request->file('foto_team')->getClientOriginalName();
            $data2->save();
        }

        return redirect('adminteam')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deleteteam($id){
        $data2 = Teamupjtekaje::find($id);
        $data2->delete();
        return redirect('adminteam')->with('toast_error',' Data Berhasil di Hapus!');
    }




    public function loby16() {
        $data3 = Upjkeunggulan::all();
        return view('upjtekaje.keunggulan.admin-keunggulan', compact('data3'));
    }
    public function tambahkeunggulan()
    {
        return view('upjtekaje.keunggulan.tambah-keunggulan');
    }

    public function submitdata16(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_keunggulan' =>'required',
            'keterangan' =>'required',
        ],[
            'foto_keunggulan.required' =>'Harus diisi',
            'keterangan.required' =>'Harus diisi',

        ]);
        $data3 = Upjkeunggulan::create([
            'foto_keunggulan' =>$request->foto_keunggulan,
            'keterangan' =>$request->keterangan,

        ]);
        if($request->hasFile('foto_keunggulan')){
            $request->file('foto_keunggulan')->move('fotomahasiswa/', $request->file('foto_keunggulan')->getClientOriginalName());
            $data3->foto_keunggulan = $request->file('foto_keunggulan')->getClientOriginalName();
            $data3->save();
        }

        return redirect()->route('adminkeunggulan')->with('toast_success',' Data Berhasil di Tambahkan!');
    }

    public function editkeunggulan($id){

        $data3 = Upjkeunggulan::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data3'));
    }

    public function submitedit16(Request $request, $id){
        $this->validate($request,[
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'nama_team' =>'harus diisi',
            'jabatan_team' =>'harus diisi',
            'fb_team' =>'harus diisi',
            'wa_team' =>'harus diisi',
            'ig_team' =>'harus diisi',

        ]);
        $data3 = Upjkeunggulan::find($id);
        $data3->update([
            'nama_team' =>$request->nama_team,
        ]);
        // if($request->hasFile('foto_keunggulan')){
        //     $request->file('foto_keunggulan')->move('fotomahasiswa/',$request->file('foto_keunggulan')->getClientOriginalName());
        //     $data3->foto_keunggulan = $request->file('foto_keunggulan')->getClientOriginalName();
        //     $data3->save();
        // }

        return redirect('adminkeunggulan')->with('toast_success',' Data Berhasil di Ubah!');

    }

    public function deletekeunggulan($id){
        $data3 = Upjkeunggulan::find($id);
        $data3->delete();
        return redirect('adminkeunggulan')->with('toast_error',' Data Berhasil di Hapus!');
    }
}
