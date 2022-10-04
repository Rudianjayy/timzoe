<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Slider;
use App\Models\Muhinews;
use App\Models\Fotoslider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index () {
        $data = Album::all();
        $d = Muhinews::all();
        $f = Muhinews::all();
        $ss = Slider::all();
        $fs = Fotoslider::all();
        return view('landingpage.landing', compact('data','d','f','ss','fs'));
    }
}
