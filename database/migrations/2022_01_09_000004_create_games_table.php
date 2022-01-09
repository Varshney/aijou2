<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('eu_release_date')->nullable();
            $table->date('na_release_date')->nullable();
            $table->date('jpm_release_date')->nullable();
            $table->date('kr_release_date')->nullable();
            $table->date('ww_release_date')->nullable();
            $table->string('store_amazon')->nullable();
            $table->string('store_ea')->nullable();
            $table->string('store_epic_games_store')->nullable();
            $table->string('store_gog')->nullable();
            $table->string('store_humble_bundle')->nullable();
            $table->string('store_microsoft')->nullable();
            $table->string('store_playstation')->nullable();
            $table->string('store_steam')->nullable();
            $table->string('store_ubisoft')->nullable();
            $table->string('store_nintendo_e_shop')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
