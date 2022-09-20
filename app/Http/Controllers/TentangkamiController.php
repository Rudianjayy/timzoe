<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    public function tentangkami() {
        return view('tentangkami.tentangkami');
    }
    public function profilsekolah(){
        return view('tentangkami.profilsekolah');
    }
}
