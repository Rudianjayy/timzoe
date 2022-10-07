<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Prestasi;
use App\Models\Sambutan;
use App\Models\Fotoslider;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;

class LandingController extends Controller
{
    public function index () {
        $data = Album::all();
        $d = Muhinews::all();
        $f = Muhinews::all();
        $ss = Slider::all();
        $fs = Fotoslider::all();
        $sa = Sambutan::all();
        $js = Jurusan::all();
        $personal = Personaljurusan::all();
        $kh = Jurusan::all();
        $ps = Prestasi::all();
        return view('landingpage.landing', compact('data','d','f','ss','fs','sa','js','personal','kh','ps'));
    }
}
