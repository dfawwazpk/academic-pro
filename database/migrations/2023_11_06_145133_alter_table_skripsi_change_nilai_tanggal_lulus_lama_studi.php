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
        Schema::table('skripsi', function (Blueprint $table) {
            $table->integer('nilai')->nullable()->change();
            $table->date('tanggal_lulus_sidang')->nullable()->change();
            $table->integer('lama_studi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skripsi', function (Blueprint $table) {
            $table->integer('nilai')->change();
            $table->date('tanggal_lulus_sidang')->change();
            $table->integer('lama_studi')->change();
        });
    }
};
