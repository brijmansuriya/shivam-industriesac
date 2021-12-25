<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function aboutus(){
        return view('aboutus');
    }
    function services(){
        return view('service');
    }
    function contactus(){
        return view('contactus');
    }
   
}
