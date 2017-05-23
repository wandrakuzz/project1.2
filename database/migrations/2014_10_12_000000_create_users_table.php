<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('matric_no')->unique();
            $table->unsignedInteger('kelab_id')->index();
            $table->string('email');
            $table->string('password');
            $table->enum('user_group', ['admin','penasihat','pelajar'])->default('pelajar');
            $table->string('alasan')->nullable();
            $table->string('kelab_baru')->nullable();
            $table->boolean('status')->default(false);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('kelab_id')->references('id')->on('kelabs')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
