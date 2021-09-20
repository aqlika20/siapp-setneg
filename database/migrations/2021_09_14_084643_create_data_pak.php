<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pak', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pak')->unique();
            $table->string('tanggal_pak')->nullable();
            $table->string('jumlah_angka_kredit')->nullable();
            $table->string('periode_penilaian')->nullable();
            $table->string('file_data_pak')->nullable();
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
        Schema::dropIfExists('data_pak');
    }
}
