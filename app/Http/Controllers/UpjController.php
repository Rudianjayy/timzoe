<?php

namespace App\Http\Controllers;
use App\Models\Muhinews;
use App\Models\Jurusan;
use App\Models\Personaljurusan;
use App\Models\footeer;

use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj() {
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        $personal = Personaljurusan::all();
        $logo = footeer::all();
        return view('upj.indexupj', compact('f','kh','personal','logo'));
    }
    public function upj() {
        return view('upj.upj');
    }


}
