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
        Schema::create('irs', function (Blueprint $table) {
            $table->id();
            $table->integer('semester');
            $table->integer('sks_diambil');
            $table->unsignedBigInteger('status');
            $table->string('file', 255);
            $table->unsignedBigInteger('mahasiswa_id');

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
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
        Schema::dropIfExists('irs');
    }
};
