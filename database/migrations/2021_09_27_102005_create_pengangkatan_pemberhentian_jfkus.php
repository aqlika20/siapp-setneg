<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengangkatanPemberhentianJfkus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengangkatan_pemberhentian_jfkus', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_surat_usulan', 30)->nullable();
            $table->string('no_surat_usulan', 30)->nullable();
            $table->string('pejabat_menandatangani', 30)->nullable();
            $table->string('file_data_usulan', 30)->nullable();

            $table->unsignedBigInteger('nip')->nullable();
            $table->string('nama', 30)->nullable();
            $table->string('tempat_lahir', 30)->nullable();
            $table->string('tanggal_lahir', 30)->nullable();
            $table->string('pendidikan_terakhir', 30)->nullable();
            $table->string('instansi_induk', 30)->nullable();
            $table->string('instansi_pengusul', 30)->nullable();
            $table->integer('pangkat_gol')->nullable();
            $table->string('tmt_gol', 30)->nullable();
            $table->string('file_nota_usulan_asn', 30)->nullable();

            $table->string('nomor_pak', 30)->nullable();
            $table->string('tanggal_pak', 30)->nullable();
            $table->string('jumlah_angka_kredit', 30)->nullable();
            $table->integer('periode_penilaian')->nullable();
            $table->string('file_data_pak', 30)->nullable();

            $table->string('nomor_klarifikasi', 30)->nullable();
            $table->string('tanggal_klarifikasi', 30)->nullable();
            $table->string('file_klarifikasi_pak', 30)->nullable();

            $table->string('nomor_pak_terakhir', 30)->nullable();
            $table->string('tanggal_pak_terakhir', 30)->nullable();
            $table->string('jumlah_angka_kredit_terakhir', 30)->nullable();
            $table->integer('periode_penilaian_terakhir')->nullable();
            $table->string('file_data_pak_terakhir', 30)->nullable();

            $table->string('jabatan_fungsional', 30)->nullable();
            $table->string('no_keppress_jabatan_fungsional', 30)->nullable();
            $table->string('file_data_jabatan_fungsional', 30)->nullable();
            $table->string('file_data_jabatan_fungsional_2', 30)->nullable();
            $table->string('file_ba_pengambilan_sumpah_pelantikan_fungsional', 30)->nullable();
            $table->string('tmt_jabatan_fungsional', 30)->nullable();
            $table->string('unit_kerja_fungsional', 30)->nullable();
            $table->string('tanggal_penerimaan_keppres', 30)->nullable();

            $table->string('alasan_pemberhentian', 30)->nullable();
            $table->text('ket_alasan_pemberhentian')->nullable();
            $table->string('tmt_pemberhentian', 30)->nullable();
            $table->string('file_pendukung_pemberhentian', 30)->nullable();
            // $table->string('tanggal_catatan_pemberhentian', 30)->nullable();
            // $table->text('catatan_pemberhentian')->nullable();
            $table->string('ket_pemberhentian', 30)->nullable();

            $table->string('jabatan', 30)->nullable();
            $table->string('no_sk_jabatan', 30)->nullable();
            $table->string('tmt_jabatan', 30)->nullable();
            $table->string('unit_kerja', 30)->nullable();
            $table->string('file_data_jabatan', 30)->nullable();

            $table->string('jabatan_lama', 30)->nullable();
            $table->string('no_sk_jabatan_lama', 30)->nullable();
            $table->string('tmt_jabatan_lama', 30)->nullable();
            $table->string('unit_kerja_lama', 30)->nullable();
            $table->string('file_data_jabatan_lama', 30)->nullable();

            $table->string('jabatan_baru', 30)->nullable();
            $table->string('unit_kerja_baru', 30)->nullable();
            $table->string('file_data_jabatan_baru', 30)->nullable();

            $table->string('no_surat_rekomendasi', 30)->nullable();
            $table->string('tanggal_surat_rekomendasi', 30)->nullable();
            $table->string('file_data_rekomendasi', 30)->nullable();
            $table->string('file_surat_pernyataan_rekomendasi', 30)->nullable();

            $table->string('jabatan_data_kompetensi', 30)->nullable();
            $table->string('nomor_sertifikat', 30)->nullable();
            $table->string('tanggal_sertifikat', 30)->nullable();
            $table->string('file_data_kompetensi', 30)->nullable();

            $table->string('jumlah', 30)->nullable();
            $table->string('terisi', 30)->nullable();
            $table->string('sisa', 30)->nullable();
            $table->string('file_formasi_jabatan', 30)->nullable();

            $table->string('file_skp_2', 30)->nullable();
            $table->string('file_skp_2_dukungan_lainnya', 30)->nullable();
            $table->string('tanggal_catatan', 30)->nullable();
            $table->text('catatan')->nullable();

            $table->string('ket', 30)->nullable();
            $table->integer('jenis_layanan')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('pengangkatan_pemberhentian_jfkus');
    }
}
