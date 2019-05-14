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
            $table->string('id_name');
            $table->string('type');
            $table->double('tip_diameter');
            $table->double('spring_constant');
            $table->integer('probeuse_id');
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
