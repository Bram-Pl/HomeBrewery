<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id('id');
//            $table->integer("BeerID");
//            $table->foreign('BeerID')->references('id')->on('beers');
            $table->foreignId('BeerID')->constrained('beers');
            $table->integer('malt');
            $table->integer('hops');
            $table->integer('yeast');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
