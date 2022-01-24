<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYeastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeast', function (Blueprint $table) {
            $table->id();
            //$table->integer('IngredientsID');
            //$table->foreign('IngredientsID')->references('id')->on('ingredients');            
            $table->foreignId('beerID')->constrained('beers');
            $table->text('name');
            $table->float('amount');
            $table->text('unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yeast');
    }
}
