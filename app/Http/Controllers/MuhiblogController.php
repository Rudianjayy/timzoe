<?php

namespace App\Http\Controllers;

use App\Models\Muhiblog;
use App\Models\Muhinews;
use App\Models\Personaljurusan;
use App\Models\footeer;
use Illuminate\Http\Request;

class MuhiblogController extends Controller
{
    public function muhiblog($id)
    {
        $blog =Muhinews::findOrFail($id);
        $d = Muhinews::paginate(3);
<<<<<<< HEAD
        $personal = Personaljurusan::all();
        $logo = footeer::all();
        return view('muhinews.muhiblog',compact('d','blog','personal','logo'));
=======
        $kategori = Muhinews::all();
        return view('muhinews.muhiblog',compact('d','blog','kategori'));
>>>>>>> bfc57480654c6d2d0b97234b27b6a5f2a35e9f51
    }
    
    
}
