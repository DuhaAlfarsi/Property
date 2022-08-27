<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintainceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintaince_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->foreignId('client_id');
            $table->string('code');
            $table->integer('price');
            $table->text('message');
            $table->string('status');

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
        Schema::dropIfExists('maintaince_requests');
    }
}
