<?php

namespace App\Models;

namespace App\Models\Admin;

use DB;
use Illuminate\Database\Eloquent\Model;

class CategorysModel extends Model
{

    public $timestamps = false;
    public function getalldata()
    {
        $alldata = DB::table('tbl_category')->select('*')
            ->where('isdelete', 0)
            ->get();
        return $alldata;
    }
    public function getonedata($id)
    {
        $onedata = DB::table('tbl_category')->select('*')
            ->where('isdelete', 0)
            ->where('id', $id)
            ->get();
        return $onedata;
    }
    public function savedoc($Request)
    {
        $imageName = "";

        if ($Request->hasFile('cat_img')) {
            $imageName = time() . '.' . $Request->cat_img = $Request->cat_img->extension();
            $Request->file('cat_img')->move(public_path('cat_img'), $imageName);
        }

        DB::table('tbl_category')->insert([
            'cat_name' => $Request->cat_name,
            'cat_img' => $imageName,
            'description' => $Request->description,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        return true;
    }
    public function editdoc($Request)
    {
        $imageName = "";
        if ($Request->hasFile('cat_img')) {
            $imageName = time() . '.' . $Request->cat_img = $Request->cat_img->extension();
            $Request->file('cat_img')->move(public_path('cat_img'), $imageName);
            DB::table('tbl_category')->where('id', $Request->id)->update([
                'cat_img' => $imageName,
            ]);
        }

        DB::table('tbl_category')->where('id', $Request->id)->update([
            'cat_name' => $Request->cat_name,
            'description' => $Request->description,
            'updated_by' => 1,
        ]);
        return true;
    }
}
