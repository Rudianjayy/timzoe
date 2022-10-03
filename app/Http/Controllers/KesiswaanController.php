<?php

namespace App\Http\Controllers;

use App\Models\Muhinews;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    public function kesiswaan() {
        $f = Muhinews::all();
        return view('kesiswaan.kesiswaan','f');
    }
    public function ekstra(){
        $f = Muhinews::all();
        return view('kesiswaan.ekstrakulikuler.ekstra', compact('f'));
    }
}
