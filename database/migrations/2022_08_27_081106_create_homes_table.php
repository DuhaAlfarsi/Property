<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->string('code');
            $table->boolean('is_furniture');
            $table->integer('num_of_bathrooms');
            $table->integer('num_of_bedrooms');
            $table->integer('num_of_liveingrooms');
            $table->integer('num_of_kitchen');
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
        Schema::dropIfExists('homes');
    }
}
