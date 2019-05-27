<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->string('contact_title', 50)->nullable();
            $table->string('business_title', 100)->nullable();
            $table->string('contact_name', 100)->nullable();
            $table->string('contact_surname', 100)->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_addressno')->nullable();
            $table->string('contact_zipcode', 20)->nullable();
            $table->string('contact_city')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_fax')->nullable();
            $table->string('contact_email')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
