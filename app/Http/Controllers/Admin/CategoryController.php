<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CategorysModel;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{

    public function __construct()
    {
        $this->CategorysModel = new CategorysModel();
    }
    public function index()
    {
        $data['alldata'] = $this->CategorysModel->getalldata();
        return view('Admin/category/index', $data);
    }
    public function add($id = '')
    {
        $result['id'] = '';
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = $this->CategorysModel->getonedata($id);
            return view('admin/category/add', $result);
        }
        return view('admin/category/add', $result);
    }
    public function save(Request $Request)
    {
        $Request->validate([
            'cat_name' => 'required|unique:tbl_category,cat_name,' . $Request->id,
        ]);

        if ($Request->id != '' and $Request->id != 0) {
            $data['customer'] = $this->CategorysModel->editdoc($Request);
            $message = 'updated Successfully';
        } else {
            $data['customer'] = $this->CategorysModel->savedoc($Request);
            $message = 'Added Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/category');

    }
    public function delete($id)
    {
        $message = 'Not Delete';
        $delete=DB::table('tbl_category')->where('id', $id)->update([
            'isdelete' => 1,
        ]);
        if($delete=1){
            $message = 'Delete Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/category');
    }
}
