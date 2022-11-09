<?php

namespace App\Http\Controllers;

use App\Models\profiladmin;
use Illuminate\Http\Request;


class ProfiladminController extends Controller
{


 public function profiladmin()
    {
        $d = profiladmin::all();
        return view('profil.profiladmin', compact('d'));
    }

}
