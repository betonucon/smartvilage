<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SembakoController extends Controller
{
    public function index(request $request){
        return view('sembako');
    }
}
