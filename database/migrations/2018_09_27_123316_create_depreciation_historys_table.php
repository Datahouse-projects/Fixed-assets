<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepreciationHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depreciation_historys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('current_dp');
            $table->string('accumulated_dp');
            $table->date('dp_run_date');
            $table->decimal('dp_ratio');
            $table->integer('dp_day');
            $table->integer('dp_year');
            $table->integer('dp_month');
            $table->string('dp_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depreciation_historys');
    }
}
