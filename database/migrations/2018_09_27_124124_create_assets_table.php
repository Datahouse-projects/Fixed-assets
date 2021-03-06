<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    //Schema::dropIfExists('assets');
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('size');
            $table->integer('cost');
            $table->date('purchase_date');
            $table->date('expire_date');
            $table->date('renewer_date');
            $table->integer('barcode')->nullable();
            $table->integer('rfid')->nullable();
            $table->integer('serial')->nullable();
            $table->string('manufacture');
            $table->string('model');
            $table->string('status');
            $table->string('condition');
            $table->string('type')->nullable();
            $table->integer('old');
            $table->integer('expected');




            $table->timestamps();
        });
        Schema::table('assets',function(Blueprint $table){
        /*  $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('dp_history_id')->references('id')->on('depreciation_historys');
            $table->foreign('dp_type_id')->references('dp_type_id')->on('depreciation_types');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('class_id')->references('id')->on('classes');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
