<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('propertyGroup_id');
            $table->string('name');
            $table->string('type');
            $table->string('status');
            $table->string('city_id');
            $table->string('location_long');
            $table->string('location_lat');
            $table->boolean('admin_approval');
            $table->integer('daily_price');
            $table->integer('monthly_price');
            $table->integer('annual_price');
            $table->boolean('electricity_included');
            $table->boolean('water_included');
            $table->boolean('wifi_included');
            $table->timestamps();
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
