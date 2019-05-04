<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('application');
            $table->unsignedInteger('provider_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filter', function (Blueprint $table) {
            //
        });
    }
}
