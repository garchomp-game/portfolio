<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('str');
            $table->integer('con');
            $table->integer('pow');
            $table->integer('dex');
            $table->integer('app');
            $table->integer('siz');
            $table->integer('int');
            $table->integer('edu');
            $table->integer('money');
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
        Schema::dropIfExists('status_sheets');
    }
}
