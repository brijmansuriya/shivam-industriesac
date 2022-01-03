<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductModel;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        
        $alldata = $this->ProductModel->getalldata();

        return view('Admin/product/index',compact('alldata'));
    }

    public function add($id = '')
    {
        $result['id'] = '';
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = $this->ProductModel->getonedata($id);
            return view('admin/product/add', $result);
        }
        return view('admin/product/add', $result);
    }
    public function save(Request $Request)
    {
        
        $Request->validate([
            'product' => 'required|unique:product,product,' . $Request->id,
            'img' => 'required|unique:product,img,' . $Request->id,
        ]);

        if ($Request->id != '' and $Request->id != 0) {
            $data['customer'] = $this->ProductModel->editdoc($Request);
            $message = 'updated Successfully';
        } else {
            $data['customer'] = $this->ProductModel->savedoc($Request);
            $message = 'Added Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/product');

    }
    public function delete($id)
    {
        $message = 'Not Delete';
        $delete=DB::table('product')->where('id', $id)->update([
            'isdelete' => 1,
        ]);
        if($delete=1){
            $message = 'Delete Successfully';
        }
        return redirect('admin/product');
    }
}