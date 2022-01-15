<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
class FrontController extends Controller
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    function aboutus(){
        return view('aboutus');
    }
    function services(){
        return view('service');
    }
    function contactus(){
        return view('contactus');
    }
    function product(){
        
        $alldata = $this->ProductModel->getalldata();
        return view('product',compact('alldata'));
    }
    function productpage($id){
        
         $onedata = $this->ProductModel->getonedata($id);
        return view('productpage',compact('onedata'));
    }
   
}
