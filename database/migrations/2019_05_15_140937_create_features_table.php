<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->integer('bedrooms')->usnigned()->nullable();
            $table->integer('bathrooms')->usnigned()->nullable();
            $table->integer('rooms')->usnigned();
            $table->string('condition', 50)->nullable();
            $table->string('age', 10)->nullable();
            $table->string('floor', 50)->nullable();
            //$table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
