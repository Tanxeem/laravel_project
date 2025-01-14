<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionsController extends Controller
{
    public function collections(){
        return view('pages.collections');
    }
}
