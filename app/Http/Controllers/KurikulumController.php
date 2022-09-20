<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function kurikulum(){
        return view('kurikulum.kurikulum');
    }
}
