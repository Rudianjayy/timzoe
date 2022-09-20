<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataidentitasController extends Controller
{
    public function index(){
        return view('data.data-identitas');
    }
}
