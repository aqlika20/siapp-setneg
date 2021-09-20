<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAsn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_asn', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nip')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('instansi');
            $table->string('file_nota_usul_asn_1');
            $table->string('pangkat_gol');
            $table->string('tmt_gol');
            $table->string('tmt_cpns');
            $table->string('masa_kerja_golongan_thn');
            $table->string('masa_kerja_golongan_bln');
            $table->string('file_nota_usul_asn_2');
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
        Schema::dropIfExists('data_asn');
    }
}
