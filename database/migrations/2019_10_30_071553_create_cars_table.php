<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('car_id');
            $table->unsignedBigInteger('owner_id');
            $table->string('warna'); 
            $table->string('plat_polisi');
            $table->string('nomor_chasis');
            $table->integer('kapasitas');
            $table->string('model_tahun'); 
            $table->string('gambar'); 
            $table->string('jenis'); 
            $table->timestamps();
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('owner_id')->references('owner_id')->on('owners');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
