<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengangkatans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengangkatans', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_usulan')->unique();
            $table->string('tanggal_surat_usulan');
            $table->string('pejabat_ttd');
            $table->string('file_usulan');
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
            $table->string('nomor_pak')->nullable();
            $table->string('tanggal_pak')->nullable();
            $table->string('jumlah_angka_kredit')->nullable();
            $table->string('periode_penilaian')->nullable();
            $table->string('file_data_pak')->nullable();
            $table->string('nomor_klarifikasi')->nullable();
            $table->string('tanggal_klarifikasi')->nullable();
            $table->string('file_klarifikasi_pak')->nullable();
            $table->string('no_keppres_jabatan')->unique();
            $table->string('jabatan');
            $table->string('file_jabatan');
            $table->string('file_ba_pengambilan_sumpah_jabatan');
            $table->string('tmt_jabatan');
            $table->string('unit_kerja');
            $table->string('pangkat_gol_baru');
            $table->string('tmt_gol_baru');
            $table->string('masa_kerja_gol_thn');
            $table->string('masa_kerja_gol_bln');
            $table->string('periode_kenaikan_pangkat');
            $table->string('file_data_pendukung');
            $table->string('tambah_catatan');
            $table->string('tanggal_catatan');
            $table->string('catatan');
            $table->string('status');
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
        Schema::dropIfExists('pengangkatans');
    }
}
