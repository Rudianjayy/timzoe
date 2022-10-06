<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Muhinews;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function ppdb(){
        $f = Muhinews::all();
        $kh = Jurusan::all();
        return view('ppdb.ppdb', compact('f','kh'));
    }
}
