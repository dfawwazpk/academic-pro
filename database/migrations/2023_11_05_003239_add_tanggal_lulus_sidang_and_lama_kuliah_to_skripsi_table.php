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
            $table->date('tanggal_lulus_sidang')->after('nilai');
            $table->integer('lama_studi')->after('tanggal_lulus_sidang');
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
            $table->dropColumn('tanggal_lulus_sidang');
            $table->dropColumn('lama_studi');
        });
    }
};
