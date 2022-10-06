<?php

namespace App\Http\Controllers;
use App\Models\Muhinews;

use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj() {
        $f = Muhinews::paginate(3);
        return view('upj.indexupj', compact('f'));
    }
    public function upj() {
        return view('upj.upj');
    }
}
