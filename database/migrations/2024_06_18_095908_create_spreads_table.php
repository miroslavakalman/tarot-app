<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpreadsTable extends Migration
{
    public function up()
    {
        Schema::create('spreads', function (Blueprint $table) {
            $table->id();
            $table->string('card1');
            $table->string('card2');
            $table->string('card3');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spreads');
    }
}

