<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hops', function (Blueprint $table) {
            $table->id();
//            $table->integer('IngredientsID');
//            $table->foreign('IngredientsID')->references('id')->on('ingredients');
            $table->foreignId('IngredientsID')->constrained('ingredients');
            $table->text("name");
            $table->float("amount");
            $table->string("unit");
            $table->string("add");
            $table->string("attribute");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hops');
    }
}
