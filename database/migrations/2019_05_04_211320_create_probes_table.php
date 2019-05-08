<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProbesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->float('radius');
            $table->float('spring_constant');
            $table->integer('measurement_id');
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
        Schema::table('probe', function (Blueprint $table) {
            //
        });
    }
}
