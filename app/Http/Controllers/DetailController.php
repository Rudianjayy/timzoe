<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailmuhi() {
        return view('blog.detailmuhi');
    }
    public function detailmuhi2(){
        return view('blog.detailmuhi2');
    }
}
