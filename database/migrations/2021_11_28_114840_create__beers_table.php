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
            $table->text('name')->default('indefined')->unique();
            $table->text("tagline")->default('indefined');
            $table->string("first_brewed")->default('indefined');
            $table->string("Description", 400)->default('indefined');
            $table->string("image_url")->default('indefined');
            $table->float("abv")->default('0');
            $table->integer("ibu")->default('0');
            $table->integer("target_fg")->default('0');
            $table->integer("target_og")->default('0');
            $table->integer("ebc")->default('0');
            $table->integer("srm")->default('0');
            $table->float("ph")->default('0');
            $table->float("attenuation_level")->default('0');
            $table->integer("boil_volume")->default('0');
//            $table->id("method");
//            $table->json("ingredients");
            $table->string("food_pairing")->default('indefined');
            $table->string("brewers_tips")->default('indefined');           
            $table->string("malt_name")->default('indefined');
            $table->float("malt_amount")->default('0');
            $table->string("malt_unit")->default('indefined');
            $table->string("hops_name")->default('indefined');
            $table->float("hops_amount")->default('0');
            $table->string("hops_unit")->default('indefined');
            $table->string("yeast_name")->default('indefined');
            $table->float("yeast_amount")->default('0');
            $table->string("yeast_unit")->default('indefined');
            
            $table->integer("contributed_by")->default('0');
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
