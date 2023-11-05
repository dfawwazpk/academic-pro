<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten_kota', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_kab');
            $table->unsignedBigInteger('kode_prov');
            $table->string('nama_kab');
            $table->timestamps();

            $table->primary('kode_kab');
            $table->foreign('kode_prov')->references('kode_prov')->on('provinsi')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten_kota');
    }
};
