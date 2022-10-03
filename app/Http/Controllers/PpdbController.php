<?php

namespace App\Http\Controllers;

use App\Models\Muhinews;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function ppdb(){
        $f = Muhinews::all();
        return view('ppdb.ppdb', compact('f'));
    }
}
