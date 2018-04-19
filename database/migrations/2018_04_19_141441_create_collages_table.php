<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('layout_id')->unsigned();
            $table->foreign('layout_id')->references('layout_id')->on('layouts');
            $table->integer('img1_position')->unsigned()->nullable();
            $table->integer('img2_position')->unsigned()->nullable();
            $table->integer('img3_position')->unsigned()->nullable();
            $table->integer('img4_position')->unsigned()->nullable();

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
        Schema::dropIfExists('collages');
    }
}
