<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatevehicleTable extends Migration
{

    public function up()
    {
        Schema::create('tbl_vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id')->nullable();
            $table->string('vehicle_name')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('isdelete')->default('0');
            $table->Integer('created_by')->nullable();
            $table->Integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_vehicle');
    }
}
