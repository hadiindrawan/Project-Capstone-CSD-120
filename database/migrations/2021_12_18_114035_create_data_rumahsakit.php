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
            $table->string('wilayah')->nullable();
            $table->text('alamat')->nullable();
            $table->integer('jumlah_kamar')->nullable();
            $table->integer('jumlah_ambulan')->nullable();
            $table->integer('kamar_kosong')->nullable();
            $table->double('lat');
            $table->double('long');
            $table->text('foto')->nullable();
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