<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    public function kesiswaan() {
        return view('kesiswaan.kesiswaan');
    }
    public function ekstra(){
        return view('kesiswaan.ekstrakulikuler.ekstra');
    }
}
