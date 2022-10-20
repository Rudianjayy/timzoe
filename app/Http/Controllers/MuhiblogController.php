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
        $kategori = Muhinews::all();
        return view('muhinews.muhiblog',compact('d','blog','kategori'));
    }
    
    
}
