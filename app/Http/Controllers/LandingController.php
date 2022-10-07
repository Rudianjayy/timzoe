<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Muhinews;
use App\Models\footeer;
use Illuminate\Http\Request;
// use App\Models\Slider;
// use App\Models\Fotoslider;
// use App\Models\Sambutan;
// use App\Models\Jurusan;
// use App\Models\Personaljurusan;
// use App\Models\jurusan;p


class LandingController extends Controller
{
    public function index () {
        $data = Album::all();
        $d = Muhinews::all();
        $f = Muhinews::all();
        $ft = footeer::all();
        // $ss = Slider::all();
        // $fs = Fotoslider::all();
        // $sa = Sambutan::all();
        // $js = Jurusan::all();
        // $personal = Personaljurusan::all();
        // $kh = Jurusan::all();

        return view('landingpage.landing', compact('data','d','f','ft'));
    }
}
