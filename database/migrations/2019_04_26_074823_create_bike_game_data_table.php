<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeGameDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_game_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bike_game_id');
            $table->integer('user_id');
            $table->integer('bike_id');
            $table->integer('rpm');
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
        Schema::dropIfExists('bike_game_datas');
    }
}
