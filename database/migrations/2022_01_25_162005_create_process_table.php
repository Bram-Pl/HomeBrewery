<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beer_id')->constrained('beers')->onDelete('cascade');
            $table->float("boilvolume");
            $table->string("boilvolumeUnit");
            $table->float("boilTime");
            $table->string("boilTimeUnit");
            $table->float("mashTemp");
            $table->string("mashTempUnit");
            $table->float("mashTime");
            $table->string("mashTimeUnit");
            $table->integer("target_fg")->default('0');
            $table->integer("target_og")->default('0');
            $table->float("attenuation_level")->default('0');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
}
