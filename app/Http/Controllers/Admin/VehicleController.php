<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\VehicleModel;
use Illuminate\Http\Request;
use DB;

class VehicleController extends Controller
{

    public function __construct()
    {
        $this->VehicleModel = new VehicleModel();
    }
    public function index()
    {
        $data['alldata'] = $this->VehicleModel->getalldata();
        return view('Admin/vehicle/index', $data);
    }
    public function add($id = '')
    {
        $result['category'] = $this->VehicleModel->getdopedata();
        $result['id'] = '';
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = $this->VehicleModel->getonedata($id);
            return view('admin/vehicle/add', $result);
        }
        return view('admin/vehicle/add', $result);
    }
    public function save(Request $Request)
    {
        $Request->validate([
            'vehicle_name' => 'required|unique:tbl_vehicle,vehicle_name,' . $Request->id,
        ]);

        if ($Request->id != '' and $Request->id != 0) {
            $data['customer'] = $this->VehicleModel->editdoc($Request);
            $message = 'updated Successfully';
        } else {
            $data['customer'] = $this->VehicleModel->savedoc($Request);
            $message = 'Added Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/vehicle');

    }
    public function delete($id)
    {
        $message = 'Not Delete';
        $delete=DB::table('tbl_vehicle')->where('id', $id)->update([
            'isdelete' => 1,
        ]);
        if($delete=1){
            $message = 'Delete Successfully';
        }
        return redirect('admin/vehicle');
    }
}
