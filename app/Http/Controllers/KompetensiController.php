<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function kompetensi() {
        return view('kurikulum.kompetensi.kompetensi');
    }
    public function tkj(){
        return view('kurikulum.kompetensi.tkj');
    }
    public function rpl(){
        return view('kurikulum.kompetensi.rpl');
    }
    public function bd(){
        return view('kurikulum.kompetensi.bd');
    }
    public function ak(){
        return view('kurikulum.kompetensi.ak');
    }
    public function dkv(){
        return view('kurikulum.kompetensi.dkv');
    }
    public function ulp(){
        return view('kurikulum.kompetensi.ulp');
    }
    public function mp(){
        return view('kurikulum.kompetensi.mp');
    }
    public function ph(){
        return view('kurikulum.kompetensi.ph');
    }
}
