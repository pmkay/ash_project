<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProbeProbeuseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probe_probuse', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('probe_id');
            $table->unsignedInteger('probeuse_id');
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
        Schema::table('probe_probuse', function (Blueprint $table) {
            //
        });
    }
}
