<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index () {
        $data = Album::all();
        return view('landingpage.landing', compact('data'));
    }
}
