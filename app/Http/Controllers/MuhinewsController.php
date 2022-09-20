<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuhinewsController extends Controller
{
    public function index() {
        return view('muhinews.muhinews');
    }
   
}
