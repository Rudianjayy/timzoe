<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function kurikulum(){
        return view('kurikulum.kurikulum');
    }
    public function kalenderakademik(){
        return view('kurikulum.kalenderakademik');
    }
    public function jadwalkegiatan(){
        return view('kurikulum.jadwalkegiatan');
    }
}
