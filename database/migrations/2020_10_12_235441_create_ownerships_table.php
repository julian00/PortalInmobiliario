<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownerships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('ambiences');
            $table->tinyInteger('bedrooms');
            $table->tinyInteger('bathrooms');
            $table->year('yearOfConstruction');
            $table->boolean('plans');
            $table->smallInteger('metersBuilt')->unsigned();
            $table->smallInteger('totalMeters')->unsigned();
            $table->mediumInteger('price');
            $table->smallInteger('expenses')->unsigned();
            $table->tinyInteger('garages');
            $table->boolean('deed');
            $table->boolean('gasWorkADay');
            //poner escribania en otra tabla
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownerships');
    }
}
