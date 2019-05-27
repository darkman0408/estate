<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->date('date_listed');
            $table->string('property_type', 50);
            $table->string('listing_type', 20);
            $table->integer('property_size')->unsigned();
            $table->integer('land_size')->unsigned()->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('link')->nullable();
            $table->string('energy_efficiency')->nullable();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->string('created_by', 100);
            $table->string('updated_by', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
