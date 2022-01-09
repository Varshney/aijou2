<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamePlatformPivotTable extends Migration
{
    public function up()
    {
        Schema::create('game_platform', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id', 'game_id_fk_5766743')->references('id')->on('games')->onDelete('cascade');
            $table->unsignedBigInteger('platform_id');
            $table->foreign('platform_id', 'platform_id_fk_5766743')->references('id')->on('platforms')->onDelete('cascade');
        });
    }
}
