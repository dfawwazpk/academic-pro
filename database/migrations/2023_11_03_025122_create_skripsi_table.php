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
        Schema::create('skripsi', function (Blueprint $table) {
            $table->id();
            $table->string('status', 6);
            $table->integer('nilai');
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
        Schema::dropIfExists('skripsi');
    }
};
