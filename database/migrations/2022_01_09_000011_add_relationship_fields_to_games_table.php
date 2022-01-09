<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToGamesTable extends Migration
{
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->unsignedBigInteger('publisher_id')->nullable();
            $table->foreign('publisher_id', 'publisher_fk_5766804')->references('id')->on('companies');
        });
    }
}
