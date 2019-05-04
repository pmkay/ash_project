<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProbeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('probes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->float('radius');
            $table->float('spring_constant');
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
