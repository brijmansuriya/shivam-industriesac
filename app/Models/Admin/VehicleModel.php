<?php

namespace App\Models;

namespace App\Models\Admin;

use DB;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{

    public $timestamps = false;
    public function getalldata()
    {
        $alldata = DB::table('tbl_vehicle as t1')->select('t1.*','t2.cat_name')
            ->leftjoin('tbl_category as t2', 't1.cat_id', 't2.id')
            ->where('t1.isdelete', 0)
            ->orderBy('t1.id','DESC')
            ->get();
        return $alldata;
    }
    public function getdopedata()
    {
        $edit = DB::table('tbl_category')->select('id', 'cat_name')
            ->where('isdelete', 0)
            ->get();
        return $edit;
    }
    public function getonedata($id)
    {
        $onedata = DB::table('tbl_vehicle')->select('*')
            ->where('isdelete', 0)
            ->where('id', $id)
            ->get();
        return $onedata;
    }
    public function savedoc($Request)
    {
     
        DB::table('tbl_vehicle')->insert([
            'cat_id' => $Request->cat_id,
            'vehicle_name' => $Request->vehicle_name,
            'description' => $Request->description,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        return true;
    }
    public function editdoc($Request)
    {
        DB::table('tbl_vehicle')->where('id', $Request->id)->update([
            'cat_id' => $Request->cat_id,
            'vehicle_name' => $Request->vehicle_name,
            'description' => $Request->description,
            'updated_by' => 1,
        ]);
        return true;
    }
}
