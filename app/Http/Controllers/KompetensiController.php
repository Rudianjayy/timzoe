<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function kompetensi() {
        return view('kurikulum.kompetensi');
    }
}
