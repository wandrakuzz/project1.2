<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ketua');
            $table->string ('timbalan_kp');
            $table->string('setiausaha');
            $table->string('timbalan_su');
            $table->string('bendahari');
            $table->string('timbalan_bendahari');
            $table->string('ajk_program');
            $table->string('ajk_publisiti');
            $table->string('ajk_tugaskhas');
            $table->string('ajk_cenderamata');
            $table->string('ajk_teknikal');
            $table->string('ajk_perhubungan');

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
        Schema::dropIfExists('jawatans');
    }
}
