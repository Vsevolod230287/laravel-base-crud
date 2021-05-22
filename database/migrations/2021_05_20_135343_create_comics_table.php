<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('thumb');
            $table->float('price', 4, 2);
            $table->string('series', 50);
            $table->date('sale_date')->nullable();
            $table->string('type', 30);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
