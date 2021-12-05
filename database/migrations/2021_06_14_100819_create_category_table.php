<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatecategoryTable extends Migration
{

    public function up()
    {
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name')->nullable();
            $table->string('cat_img')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('isdelete')->default('0');
            $table->Integer('created_by')->nullable();
            $table->Integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_category');
    }
}
