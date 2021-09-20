<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePangkatBaru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pangkat_baru', function (Blueprint $table) {
            $table->id();
            $table->string('pangkat_gol');
            $table->string('tmt_gol');
            $table->string('masa_kerja_gol_thn');
            $table->string('masa_kerja_gol_bln');
            $table->string('periode_kenaikan_pangkat');
            $table->string('file_data_pendukung');
            $table->string('tambah_catatan');
            $table->string('tanggal_catatan');
            $table->string('catatan');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pangkat_baru');
    }
}
