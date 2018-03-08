<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HousesMigrationCreated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_id')->unsigned()->unique();
            $table->foreign('host_id')->references('id')->on('hosts');
            $table->integer('refugee_id')->unsigned()->unique()->nullable();
            $table->foreign('refugee_id')->references('id')->on('refugees');
            $table->string('address');
            $table->integer('nbRoom');
            $table->boolean('free');
            $table->string('type');
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
        //
    }
}
