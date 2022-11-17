<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biaya;


class LandingppdbController extends Controller
{
    public function landingppdb(){

        $ab = biaya::all();

        return view('landingppdb.landingppdb', compact('ab'));
    }
}
