<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataAmbulanss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ambulans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rumahsakit_id');
            $table->text('flat_nomor');
            $table->text('wilayah');
            $table->text('status');
            $table->double('lat');
            $table->double('lng');
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
        //
    }
}
