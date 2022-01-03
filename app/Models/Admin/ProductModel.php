<?php

namespace App\Models;
namespace App\Models\Admin;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public $table='product';

    public function getalldata(){
        $alldata = DB::table('product as t1')->select('t1.*')
            ->where('t1.isdelete', 0)
            ->orderBy('t1.id','DESC')
            ->get();
        return $alldata;
    }

    public function getonedata($id)
    {
        $onedata = DB::table('product')->select('*')
            ->where('isdelete', 0)
            ->where('id', $id)
            ->get();
        return $onedata;
    }

    public function savedoc($Request)
    {

        $imageName = "";

        if ($Request->hasFile('img')) {
            $imageName = time() . '.' . $Request->img = $Request->img->extension();
            $Request->file('img')->move(public_path('img'), $imageName);
        }

        DB::table('product')->insert([
            'product' => $Request->product,
            'img' => $imageName,
            'description' => $Request->description,
            'created_by' => date('Y/m/d h:i:s'),
            'updated_by' => date('Y/m/d h:i:s'),
        ]);
        return true;
    }
    public function editdoc($Request)
    {

        $imageName = "";
        if ($Request->hasFile('img')) {
            $imageName = time() . '.' . $Request->img = $Request->img->extension();
            $Request->file('img')->move(public_path('img'), $imageName);
            DB::table('product')->where('id', $Request->id)->update([
                'img' => $imageName,
            ]);
        }

        DB::table('product')->where('id', $Request->id)->update([
            'product' => $Request->product,
            'description' => $Request->description,
            'updated_by' => date('Y/m/d h:i:s'),
        ]);
        return true;
    }
    
}