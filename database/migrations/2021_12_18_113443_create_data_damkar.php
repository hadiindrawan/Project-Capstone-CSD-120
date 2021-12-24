<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDamkar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_damkar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('markas_id')->nullable();
            $table->text('flat_nomor');
            $table->string('wilayah')->nullable();
            $table->string('status');
            $table->double('lat');
            $table->double('lng');
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
        Schema::dropIfExists('data_damkar');
    }
}
