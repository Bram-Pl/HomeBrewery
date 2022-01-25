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
            $table->string("Description",400)->default('indefined');
            $table->string("image_url")->default('indefined');
            $table->float("abv")->default('0');
            $table->integer("ibu")->default('0');
            $table->integer("ebc")->default('0');
            $table->integer("srm")->default('0');
            $table->float("ph")->default('0');
            $table->integer("boil_volume")->default('0');
//            $table->id("method");
//            $table->json("ingredients");
            $table->string("food_pairing")->default('indefined');
            $table->string("brewers_tips")->default('indefined');           
            $table->string("type")->default('indefined');  
            //$table->text('brewery');
            //$table->foreign('brewery')->nullable()->references('name')->on('breweries');
            $table->foreignId("breweries_id")->nullable()->references('id')->on('breweries')->onDelete('cascade');
            $table->foreignId("contributed_by")->constrained('users')->onDelete('cascade');
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
