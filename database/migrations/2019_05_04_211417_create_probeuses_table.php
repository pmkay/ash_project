<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProbeuseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('probeuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('speed');
            $table->float('contact_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('probeuse', function (Blueprint $table) {
            //
        });
    }
}
