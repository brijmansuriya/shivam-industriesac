<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BearingModel;
use Illuminate\Http\Request;
use DB;
class BearingController extends Controller
{

    public function __construct()
    {
        $this->BearingModel = new BearingModel();
    }
    public function index()
    {
        $data['alldata'] = $this->BearingModel->getalldata();
        return view('Admin/bearing/index', $data);
    }
    public function add($id = '')
    {
        $result['vehicle'] = $this->BearingModel->getdopedata();
   
        $result['id'] = '';
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = $this->BearingModel->getonedata($id);
            return view('admin/bearing/add', $result);
        }
        return view('admin/bearing/add', $result);
    }
    public function save(Request $Request)
    {
        $Request->validate([
            'bearing_name' => 'required|unique:tbl_bearing,bearing_name,' . $Request->id,
        ]);

        if ($Request->id != '' and $Request->id != 0) {
            $data['customer'] = $this->BearingModel->editdoc($Request);
            $message = 'updated Successfully';
        } else {
            $data['customer'] = $this->BearingModel->savedoc($Request);
            $message = 'Added Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/bearing');

    }
    public function delete($id)
    {
        $message = 'Not Delete';
        $delete=DB::table('tbl_bearing')->where('id', $id)->update([
            'isdelete' => 1,
        ]);
        if($delete=1){
            $message = 'Delete Successfully';
        }
        return redirect('admin/bearing');
    }
}
