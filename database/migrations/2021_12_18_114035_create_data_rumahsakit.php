<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRumahsakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rumahsakit', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('wilayah');
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_ambulan');
            $table->integer('kamar_kosong');
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
        Schema::dropIfExists('data_rumahsakit');
    }
}