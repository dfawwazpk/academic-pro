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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('kabupaten_kota')->nullable()->change();
            $table->unsignedBigInteger('provinsi')->nullable()->change();
            $table->foreign('kabupaten_kota')->references('kode_kab')->on('kabupaten_kota')->onDelete('restrict');
            $table->foreign('provinsi')->references('kode_prov')->on('provinsi')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['kabupaten_kota']);
            $table->dropForeign(['provinsi']);
            $table->string('kabupaten_kota', 50)->nullable()->change();
            $table->string('provinsi', 50)->nullable()->change();
        });
    }
};
