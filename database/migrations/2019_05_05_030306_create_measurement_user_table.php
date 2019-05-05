<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurement_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('measurement_id');
            $table->unsignedInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('measurement_user', function (Blueprint $table) {
            //
        });
    }
}
