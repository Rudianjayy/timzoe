<?php

namespace App\Http\Controllers;

use App\Models\Albumiduka;
use App\Models\Iduka;
use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Fotoiduka;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;
use App\Models\footeerdua;

class IdukaController extends Controller
{
    public function index(){
        $i = Iduka::all();
        $fotoiduka = Fotoiduka::all();
        $kh = Jurusan::all();
        $personal = Personaljurusan::all();
        $ft = footeer::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        $otkp = Albumiduka::paginate(6);
        $tjkt = Albumiduka::paginate(6);
        $akl = Albumiduka::paginate(6);
        $ph = Albumiduka::paginate(6);
        $dkv = Albumiduka::paginate(6);
        $pplg = Albumiduka::paginate(6);
        $paginate = Albumiduka::paginate(6);
        return view('iduka.iduka', compact('i','fotoiduka','kh','personal','ft','logo','link','otkp','tjkt','akl','ph','dkv','pplg','paginate'));
    }
    public function indexadmin() {
        $data = Iduka::all();
        return view('iduka.admin.iduka-admin', compact('data'));
    }
    public function tambahiduka()
    {
        return view('iduka.admin.tambah-iduka');
    }

    public function idukaproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul_iduka' =>'required',
            'deskripsi_iduka' =>'required',
        ],[
            'judul_iduka.required' =>'Harus diisi',
            'deskripsi_iduka.required' =>'Harus diisi',

        ]);
        $data = Iduka::create([
            'judul_iduka' =>$request->judul_iduka,
            'deskripsi_iduka' =>$request->deskripsi_iduka,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect()->route('idukaadmin')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editiduka($id){

        $data = Iduka::findOrFail($id);
        return view('iduka.admin.edit-iduka', compact('data'));
    }

    public function editproses3(Request $request, $id){
        $this->validate($request,[
            'judul_iduka' =>'required',
            'deskripsi_iduka' =>'required',
        ],[
            'judul_iduka' =>'harus diisi',
            'deskripsi_iduka' =>'harus diisi',

        ]);
        $data = Iduka::find($id);
        $data->update([
            'judul_iduka' =>$request->judul_iduka,
            'deskripsi_iduka' =>$request->deskripsi_iduka,
        ]);
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect('idukaadmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function deleteiduka($id){
        $data = Iduka::find($id);
        $data->delete();
        return redirect('idukaadmin')->with('success',' Data Berhasil di Hapus!');
    }














    //FOTOOOOO MOUUU

    public function fotomouadmin() {
        $fotoiduka = Fotoiduka::all();
        $data2 = Fotoiduka::all();
        $f = Muhinews::paginate(4);
        $kh = Jurusan::all();
        return view('iduka.fotomou.foto-mou-admin', compact('data2','fotoiduka','f','kh'));
    }
    public function tambahfotomouadmin()
    {
        return view('iduka.fotomou.tambah-foto');
    }

    public function adminfotomouproses(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_iduka' =>'required',
            'foto_iduka' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',

            'jurusan_mou' =>'required',

        ],[
            'foto_iduka.required' =>'Harus diisi',
            'foto_iduka.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

            'jurusan_mou.required' =>'Harus diisi',


        ]);
        $data2 = Fotoiduka::create([
            'foto_iduka' =>$request->foto_iduka,
            'jurusan_mou' =>$request->jurusan_mou,
        ]);
            if($request->hasFile('foto_iduka')){
                $request->file('foto_iduka')->move('fotomahasiswa/', $request->file('foto_iduka')->getClientOriginalName());
                $data2->foto_iduka = $request->file('foto_iduka')->getClientOriginalName();
                $data2->save();
            }



        return redirect()->route('fotomouadmin')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editadminfotomou($id){

        $data2 = Fotoiduka::findOrFail($id);
        return view('iduka.fotomou.edit-mou', compact('data2'));
    }

    public function editadminproses4(Request $request, $id){
        // $this->validate($request,[
        //     'foto_tkj' =>'required',
        //     'foto_mm' =>'required',
        //     'foto_ak' =>'required',
        //     'foto_otkp' =>'required',
        //     'foto_bd' =>'required',
        //     'foto_ph' =>'required',
        // ],[
        //     'foto_tkj.required' =>'Harus diisi',
        //     'foto_mm.required' =>'Harus diisi',
        //     'foto_ak.required' =>'Harus diisi',
        //     'foto_otkp.required' =>'Harus diisi',
        //     'foto_bd.required' =>'Harus diisi',
        //     'foto_ph.required' =>'Harus diisi',

        // ]);
        $data2 = Fotoiduka::find($id);
        $data2->update([
            // 'judul_iduka' =>$request->judul_iduka,
            // 'deskripsi_iduka' =>$request->deskripsi_iduka,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data2->foto = $request->file('foto')->getClientOriginalName();
            $data2->save();
        }

        return redirect('fotomouadmin')->with('success',' Data Berhasil di Ubah!');

    }

    public function deleteadminfotomou($id){
        $data2 = Fotoiduka::find($id);
        $data2->delete();
        return redirect('fotomouadmin')->with('success',' Data Berhasil di Hapus!');
    }

















    // //ALBUM IDUKA

    // public function albumiduka(){
    //     $data3 = Albumiduka::all();
    //     return view('iduka.albumiduka.album-iduka', compact('data3'));
    // }

    // public function tambahalbumfoto(){
    //     return view('iduka.albumiduka.tambah-album-iduka');
    // }

    // public function submitdata30(Request $request){
    //     // dd($request->all());
    //     $this->validate($request,[
    //         'foto_otkp' =>'required',
    //         'foto_otkp' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //         'foto_tjkt' =>'required',
    //         'foto_tjkt' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //         'foto_akl' =>'required',
    //         'foto_akl' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //         'foto_ph' =>'required',
    //         'foto_ph' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //         'foto_dkv' =>'required',
    //         'foto_dkv' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
    //         'foto_pplg' =>'required',
    //         'foto_pplg' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',


    //     ],[
    //         'foto_otkp.required' =>'Harus diisi',
    //         'foto_otkp.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
    //         'foto_tjkt.required' =>'Harus diisi',
    //         'foto_tjkt.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
    //         'foto_akl.required' =>'Harus diisi',
    //         'foto_akl.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
    //         'foto_ph.required' =>'Harus diisi',
    //         'foto_ph.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
    //         'foto_dkv.required' =>'Harus diisi',
    //         'foto_dkv.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
    //         'foto_pplg.required' =>'Harus diisi',
    //         'foto_pplg.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',



    //     ]);
    //     $data3 = Albumiduka::create([
    //         'foto_otkp' =>$request->foto_otkp,
    //         'foto_tjkt' =>$request->foto_tjkt,
    //         'foto_akl' =>$request->foto_akl,
    //         'foto_ph' =>$request->foto_ph,
    //         'foto_dkv' =>$request->foto_dkv,
    //         'foto_pplg' =>$request->foto_pplg,
    //     ]);
    //         if($request->hasFile('foto_otkp')){
    //             $request->file('foto_otkp')->move('fotomahasiswa/', $request->file('foto_otkp')->getClientOriginalName());
    //             $data3->foto_otkp = $request->file('foto_otkp')->getClientOriginalName();
    //             $data3->save();
    //         }
    //         if($request->hasFile('foto_tjkt')){
    //             $request->file('foto_tjkt')->move('fotomahasiswa/', $request->file('foto_tjkt')->getClientOriginalName());
    //             $data3->foto_tjkt = $request->file('foto_tjkt')->getClientOriginalName();
    //             $data3->save();
    //         }
    //         if($request->hasFile('foto_akl')){
    //             $request->file('foto_akl')->move('fotomahasiswa/', $request->file('foto_akl')->getClientOriginalName());
    //             $data3->foto_akl = $request->file('foto_akl')->getClientOriginalName();
    //             $data3->save();
    //         }
    //         if($request->hasFile('foto_ph')){
    //             $request->file('foto_ph')->move('fotomahasiswa/', $request->file('foto_ph')->getClientOriginalName());
    //             $data3->foto_ph = $request->file('foto_ph')->getClientOriginalName();
    //             $data3->save();
    //         }
    //         if($request->hasFile('foto_dkv')){
    //             $request->file('foto_dkv')->move('fotomahasiswa/', $request->file('foto_dkv')->getClientOriginalName());
    //             $data3->foto_dkv = $request->file('foto_dkv')->getClientOriginalName();
    //             $data3->save();
    //         }
    //         if($request->hasFile('foto_pplg')){
    //             $request->file('foto_pplg')->move('fotomahasiswa/', $request->file('foto_pplg')->getClientOriginalName());
    //             $data3->foto_pplg = $request->file('foto_pplg')->getClientOriginalName();
    //             $data3->save();
    //         }



    //     return redirect()->route('albumiduka')->with('success',' Data Berhasil di Tambahkan!');
    // }




}
