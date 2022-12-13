<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Album;
use App\Models\Mitra;
use App\Models\Formulir;
use App\Models\Muhinews;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


        $status = Formulir::where('status', 'diterima')->select(DB::raw("COUNT(*) as status"))
        ->GroupBy(DB::raw("Year(created_at)"))
        ->pluck('status');

        $bulan = Formulir::select(DB::raw("YEAR(created_at) as bulan"))
        ->GroupBy(DB::raw("YEAR(created_at)"))
        ->pluck('bulan');
        return view('welcome',compact('status','bulan','berita', 'galery', 'prestasi', 'mitra','formulir','formulird','total','formulirp'));
    }


    public function filter_grafik(Request $request)
    {
        $year = $request->get('year');

        $siswaditerima = Formulir::where('status', 'diterima')
        ->whereYear('created_at', '=', $year)->get();

        return view('welcome', ['siswaditerima' => $siswaditerima]);
    }

    public function ajaxgrafik(Request $request){
        $siswaditerima = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        $diterima = Formulir::where('status', 'diterima')->whereYear('created_at', $request->tahun)->get();
        foreach ($diterima as $dt) {
            $jumlah = $siswaditerima[Carbon::parse($dt->created_at)->month - 1];

            $siswaditerima[Carbon::parse($dt->created_at)->month - 1] = $jumlah + 1;

        }
        $data = [
            "diterima" => $siswaditerima,
        
        ];
        return $data;
    }
}
