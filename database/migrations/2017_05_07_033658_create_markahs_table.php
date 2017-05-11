<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jawatan');
            $table->integer('kedatangan');
            $table->integer('kertas_kerja');
            $table->integer('komitmen');
            $table->integer('total');
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
        Schema::dropIfExists('markahs');
    }
}
