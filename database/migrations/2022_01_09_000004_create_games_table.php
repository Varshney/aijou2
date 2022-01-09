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
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
