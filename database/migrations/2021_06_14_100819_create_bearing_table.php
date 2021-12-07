<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatebearingTable extends Migration
{

    public function up()
    {
        Schema::create('tbl_bearing', function (Blueprint $table) {
            $table->id();
            $table->string('v_id')->nullable();
            $table->string('bearing_name')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('isdelete')->default('0');
            $table->Integer('created_by')->nullable();
            $table->Integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_bearing');
    }
}
