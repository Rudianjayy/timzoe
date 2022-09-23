<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index () {
        $data = Album::all();
        $d = Muhinews::all();
        return view('landingpage.landing', compact('data','d'));
    }
}
