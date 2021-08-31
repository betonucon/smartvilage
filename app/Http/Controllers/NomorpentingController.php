<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomorpentingController extends Controller
{
    public function index(request $request){
        return view('telepon');
    }
}
