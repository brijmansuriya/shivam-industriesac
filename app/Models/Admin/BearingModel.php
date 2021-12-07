<?php

namespace App\Models;

namespace App\Models\Admin;

use DB;
use Illuminate\Database\Eloquent\Model;

class BearingModel extends Model
{

    public $timestamps = false;
    public function getalldata()
    {
        $alldata = DB::table('tbl_bearing as t1')->select('t1.*','t2.vehicle_name')
            ->leftjoin('tbl_vehicle as t2', 't1.v_id', 't2.id')
            ->where('t1.isdelete', 0)
            ->orderBy('t1.id','DESC')
            ->get();
        return $alldata;
    }
    public function getdopedata()
    {
        $edit = DB::table('tbl_vehicle')->select('id','vehicle_name')
            ->where('isdelete',0)
            ->get();
        return $edit;
    }
    public function getonedata($id)
    {
        $onedata = DB::table('tbl_bearing')->select('*')
            ->where('isdelete', 0)
            ->where('id', $id)
            ->get();
        return $onedata;
    }
    public function savedoc($Request)
    {
     
        DB::table('tbl_bearing')->insert([
            'v_id' => $Request->v_id,
            'bearing_name' => $Request->bearing_name,
            'description' => $Request->description,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        return true;
    }
    public function editdoc($Request)
    {
        DB::table('tbl_bearing')->where('id', $Request->id)->update([
            'v_id' => $Request->v_id,
            'bearing_name' => $Request->bearing_name,
            'description' => $Request->description,
            'updated_by' => 1,
        ]);
        return true;
    }
}
