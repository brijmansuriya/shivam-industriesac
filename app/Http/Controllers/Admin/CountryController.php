<?php

namespace App\Http\Controllers\siteadmin;

use App\Http\Controllers\Controller;
use App\Models\siteadmin\CountryModel;
use DB;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->CountryModel = new CountryModel();
    }
    public function index()
    {
        $data['docdata'] = $this->CountryModel->getdata();
        return view('siteadmin/country/index', $data);
    }
    public function add($id = 0)
    {
        $data['id']='';
        $data['documentdata'] = $this->CountryModel->getdocument();
        
        if ($id != '' and $id != 0) {
            $data['docdata'] = $this->CountryModel->geteditdata($id);
            $data['id']=$id;
        }
        return view('siteadmin/country/add',$data);
    }
    public function save(Request $request)
    {
       
        if ($request->id != '' and $request->id != 0) {
            $data['customer'] = $this->CountryModel->editdoc($request);
        } else {
            $data['customer'] = $this->CountryModel->savedoc($request);
        }
        return redirect('siteadmin/country');
    }
    public function delete($id)
    {
        DB::table('country')->where('id', $id)->update([
            'is_delete' => 1,
        ]);
        return redirect('siteadmin/country');
    }
}
