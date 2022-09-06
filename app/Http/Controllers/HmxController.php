<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HmxController extends Controller
{
    public function index(Request $request){
        return view('hmx.index');
    }
}
