<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',255);
            $table->integer('crag_id')->unsigned();
            $table->integer('sector_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('climb_id')->unsigned();
            $table->integer('height');
            $table->integer('open_year');
            $table->text('opener');
            $table->integer('note');
            $table->integer('nb_note');
            $table->timestamps();

            //clé étrangère
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('crag_id')->references('id')->on('crags');
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->foreign('climb_id')->references('id')->on('climbs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('routes');
    }
}
