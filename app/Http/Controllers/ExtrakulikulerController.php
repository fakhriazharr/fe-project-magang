<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrakulikulerController extends Controller
{
    function index(){
        return view('layouts.extrakulikuler-layout');
    }
}
