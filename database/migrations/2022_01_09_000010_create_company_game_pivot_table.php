<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGamePivotTable extends Migration
{
    public function up()
    {
        Schema::create('company_game', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id', 'game_id_fk_5766803')->references('id')->on('games')->onDelete('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id', 'company_id_fk_5766803')->references('id')->on('companies')->onDelete('cascade');
        });
    }
}
