<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text("tagline");
            $table->string("first_brewed");
            $table->string("Description");
            $table->string("image_url");
            $table->float("abv");
            $table->integer("ibu");
            $table->integer("target_fg");
            $table->integer("target_og");
            $table->integer("ebc");
            $table->integer("srm");
            $table->float("ph");
            $table->float("attenuation_level");
            $table->integer("boil_volume");
//            $table->id("method");
            $table->json("ingredients");
            $table->string("food_pairing");
            $table->string("brewers_tips");
            $table->integer("contributed_by");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
