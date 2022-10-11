<?php

namespace App\Http\Controllers;
use App\Models\Muhinews;
use App\Models\Jurusan;

use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj() {
        $f = Muhinews::paginate(3);
        $kh = Jurusan::all();
        return view('upj.indexupj', compact('f','kh'));
    }
    public function upj() {
        return view('upj.upj');
    }
}
