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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('nim', 14);
            $table->string('nama', 100);
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('kabupaten_kota', 50)->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('angkatan', 4);
            $table->string('jalur_masuk', 7);
            $table->string('status', 15);

            $table->primary('id');
            $table->unique('nim');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('mahasiswa');
    }
};
