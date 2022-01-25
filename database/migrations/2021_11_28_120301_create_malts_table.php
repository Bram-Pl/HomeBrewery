<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malts', function (Blueprint $table) {
            $table->id();
            //$table->integer('IngredientsID');
            //$table->foreign('IngredientsID')->references('id')->on('ingredients');            
            $table->foreignId('beer_id')->references('id')->on('beers')->onDelete('cascade');
            $table->string("name");
            $table->float("amount");
            $table->string("unit");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('malt');
    }
}
