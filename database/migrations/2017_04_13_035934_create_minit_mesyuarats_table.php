<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinitMesyuaratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minit_mesyuarats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('suggest_id');
            $table->string('tarikh');
            $table->string('ulasan');
            $table->timestamps();

            $table->foreign('suggest_id')->references('id')->on('suggests')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minit_mesyuarats');
    }
}
