<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuhiblogController extends Controller
{
    public function muhiblog(){
        return view('muhinews.muhiblog');
    }
}
