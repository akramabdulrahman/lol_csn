<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summoners', function (Blueprint $table) {
            $table->increments('id');
            $table->text('summoner_name');
            $table->integer('riot_id')->unsigned();
            $table->integer('server_id')->unsigned();
            $table->integer('user_id')->unsigned();            
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
        Schema::drop('summoners');
    }
}
