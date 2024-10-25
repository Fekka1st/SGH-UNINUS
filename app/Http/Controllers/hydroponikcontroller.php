<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hydroponikcontroller extends Controller
{
    //
    public function index(){
        return view('hydroponik.index');
    }
}
