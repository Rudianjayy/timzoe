<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpjController extends Controller
{
    public function indexupj() {
        return view('upj.indexupj');
    }
    public function upj() {
        return view('upj.upj');
    }
}
