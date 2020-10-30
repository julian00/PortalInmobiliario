<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToOwnerships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ownerships', function (Blueprint $table) {
            $table->foreignId('id_currency')->references('id')->on('currencies');
            $table->foreignId('id_ownership_type')->references('id')->on('ownership_types');
            $table->foreignId('id_orientation')->references('id')->on('orientations');
            $table->foreignId('id_operation')->references('id')->on('operations');
            $table->foreignId('id_neighborhood')->references('id')->on('neighborhoods');
            $table->foreignId('id_city')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('=ownerships', function (Blueprint $table) {
            //
        });
    }
}
