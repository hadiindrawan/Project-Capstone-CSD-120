<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMarkasdamkar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_markasdamkar', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('wilayah');
            $table->integer('jumlah_armada');
            $table->integer('jumlah_personil');
            $table->double('lat');
            $table->double('long');
            $table->text('foto');
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
        Schema::dropIfExists('data_markasdamkar');
    }
}