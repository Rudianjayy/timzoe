<?php

namespace App\Http\Controllers;
use App\Models\Muhinews;

use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj() {
        $f = Muhinews::all();
        return view('upj.indexupj', compact('f'));
    }
    public function upj() {
        return view('upj.upj');
    }
}
