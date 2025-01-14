<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kidsController extends Controller
{
    public function kids(){
        return view('pages.kids');
    }
}
