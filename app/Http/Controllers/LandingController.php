<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Slider;
use App\Models\Akademi;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\Prestasi;
use App\Models\Sambutan;
use App\Models\Fotoslider;
use App\Models\Footeer;
use Illuminate\Http\Request;
use App\Models\Personaljurusan;

class LandingController extends Controller
{
    public function index () {
        $data = Album::paginate(2);
        $k = Muhinews::paginate(6);
        $d = Muhinews::paginate(6);
        $f = Muhinews::paginate(3);
        $ss = Slider::all();
        $fs = Fotoslider::all();
        $ft = footeer::all();
        $sa = Sambutan::all();
        $js = Jurusan::all();
        $personal = Personaljurusan::all();
        $kh = Jurusan::all();
        $ps = Prestasi::all();
        $akademi = Akademi::all();
        $logo = footeer::all();
        return view('landingpage.landing', compact('data','d','f','ss','fs','ft','sa','js','personal','kh','ps','akademi','logo'));
    }
}
