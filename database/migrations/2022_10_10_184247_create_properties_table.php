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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('location');
            $table->longText('description');
            $table->string('price');
            $table->string('type');
            $table->string('status');
            $table->integer('area');
            $table->integer('beds');
            $table->integer('baths');
            $table->integer('garage')->nullable();
            $table->string('images')->nullable();
            $table->string('video')->nullable();
            //map
            $table->string('latitude');
            $table->string('longitude');
            $table->unsignedbigInteger('agent_id')->nullable();
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade');
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
