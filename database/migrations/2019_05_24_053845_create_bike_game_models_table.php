<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeGameModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_game_models', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('bike_game_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->foreign('bike_game_id')->references('id')->on('bike_games') ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike_game_models');
    }
}
