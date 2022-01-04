<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $alldata = $this->ProductModel->getalldata();
        return view('home',compact('alldata'));
    }
}
