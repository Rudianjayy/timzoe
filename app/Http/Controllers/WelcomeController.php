<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Album;
use App\Models\Biaya;
use App\Models\Mitra;
use App\Models\Formulir;
use App\Models\Muhinews;
use App\Models\Prestasi;
use App\Models\Pamfletppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function welcome(){
        $berita = Muhinews::count();
        $galery = Album::count();
        $prestasi = Prestasi::count();
        $mitra = Mitra::count();
        $total = Formulir::count();
        $formulir = Formulir::where('status','=','diterima')->count();
        $formulird = Formulir::where('status','=','ditolak')->count();
        $formulirp = Formulir::where('status','=','pending')->count();
        $pamflet = Pamfletppdb::all();
        $data3 = Biaya::all();
        $anjay = Formulir::where('status','diterima')->get();
        // $pengumuman = Formulir::where('status',Auth::user()->id)->first();


        $status = Formulir::where('status', 'diterima')->select(DB::raw("COUNT(*) as status"))
        ->GroupBy(DB::raw("Year(created_at)"))
        ->pluck('status');

        $bulan = Formulir::select(DB::raw("YEAR(created_at) as bulan"))
        ->GroupBy(DB::raw("YEAR(created_at)"))
        ->pluck('bulan');

        // foreach ($anjay as $st) {
        //     $status_tahun = [Carbon::parse($st->created_at)->year -1];

        // }
        

        return view('welcome',compact('status','bulan','berita', 'galery', 'prestasi', 'mitra','formulir','formulird','total','formulirp','pamflet','data3'));
    }


    public function filter_grafik(Request $request)
    {
        $year = $request->get('year');

        $siswaditerima = Formulir::where('status', 'diterima')
        ->whereYear('created_at', '=', $year)->get();

        return view('welcome', ['siswaditerima' => $siswaditerima]);
    }

    public function ajaxgrafik(Request $request){
        $anjay = Formulir::where('status','diterima')->get();
        foreach($anjay as $a){
            $siswaditerima = [Carbon::parse($a->created_at)->year -1];
        }
        

        $diterima = Formulir::where('status', 'diterima')->whereYear('created_at', $request->year)->get();
        foreach ($diterima as $dt) {
            $jumlah = $siswaditerima[Carbon::parse($dt->created_at)->year - 1];

            $siswaditerima[Carbon::parse($dt->created_at)->year - 1] = $jumlah + 1;

        }
        $data = [
            "diterima" => $siswaditerima,
        
        ];
        return $data;
    }




    public function adminpamflet()
    {
        $pamflet = Pamfletppdb::all();
        return view('ppdb.pamflet.admin-pamflet', compact('pamflet'));
    }

    public function tambahpamflet()
    {
        $pamflet = Pamfletppdb::all();
        return view('ppdb.pamflet.tambah-pamflet', compact('pamflet'));
    }
    public function prosestambahpamflet(Request $request)
    {
        $this->validate($request, [
            'foto_pamflet' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp',
        ], [
            'foto_pamflet.required' =>'Harus diisi',
            'foto_pamflet.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',
        ]);
        $pamflet = Pamfletppdb::create([
            'foto_pamflet' => $request->foto_pamflet,
        ]);
        if ($request->hasFile('foto_pamflet')) {
            $request->file('foto_pamflet')->move('fotomahasiswa/', $request->file('foto_pamflet')->getClientOriginalName());
            $pamflet->foto_pamflet = $request->file('foto_pamflet')->getClientOriginalName();
            $pamflet->save();
        }
        return redirect()->route('adminpamflet')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function editpamflet($id)
    {
        $pamflet = Pamfletppdb::findOrFail($id);
        return view('ppdb.pamflet.edit-pamflet', compact('pamflet'));
    }
    public function editprosespamflet(Request $request, $id)
    {
        $pamflet = Pamfletppdb::find($id);
        $pamflet->update([
            'foto_pamflet' => $request->foto_pamflet,
        ]);
        if ($request->hasFile('foto_pamflet')) {
            $request->file('foto_pamflet')->move('fotomahasiswa/', $request->file('foto_pamflet')->getClientOriginalName());
            $pamflet->foto_pamflet = $request->file('foto_pamflet')->getClientOriginalName();
            $pamflet->save();
        }
        return redirect()->route('adminpamflet')->with('success', 'Data Berhasil Di Edit');
    }

    public function deletepamflet($id)
    { 
        $pamflet = Pamfletppdb::find($id);
        $pamflet->delete();
        return redirect()->route('adminpamflet')->with('success', 'Data Berhasil Di Hapus');
    }
}
