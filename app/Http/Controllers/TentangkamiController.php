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
    public function identitassekolah(){
        return view('tentangkami.identitas_sekolah');
    }
    public function fasilitassekolah(){
        return view('tentangkami.fasilitassekolah');
    }
}

