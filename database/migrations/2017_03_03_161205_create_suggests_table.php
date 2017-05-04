<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->string('activity_name');
            $table->date('activity_date_start');
            $table->date('activity_date_end');
            $table->time('activity_time_start');
            $table->time('activity_time_end');
            $table->string('activity_summary');
            $table->boolean('is_verified')->default(false);
            $table->string('activity_type')->nullable();
            $table->string('path')->nullable();
            $table->enum('status',['approved','rejected','pending'])->default('pending');
            $table->string('kertas_kerja')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggests');
    }
}
