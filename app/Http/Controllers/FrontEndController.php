<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function inicio(){
        return view('frontend.inicio');
    }
}
