<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengangkatanPemberhentianJFKU extends Model
{

    protected $table = 'pengangkatan_pemberhentian_jfkus';

    protected $fillable = [
        'id', 'tgl_surat_usulan', 'no_surat_usulan', 'pejabat_menandatangani', 'file_data_usulan', 'nip', 'nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_terakhir', 'instansi_induk', 'instansi_pengusul', 'pangkat_gol', 'tmt_gol', 'file_nota_usulan_asn', 'nomor_pak', 'tanggal_pak', 'jumlah_angka_kredit', 'periode_penilaian', 'file_data_pak', 'nomor_klarifikasi', 'tanggal_klarifikasi', 'file_klarifikasi_pak', 'nomor_pak_terakhir', 'tanggal_pak_terakhir', 'jumlah_angka_kredit_terakhir', 'periode_penilaian_terakhir', 'file_data_pak_terakhir', 'jabatan_fungsional', 'no_keppress_jabatan_fungsional', 'file_data_jabatan_fungsional', 'file_data_jabatan_fungsional_2', 'file_ba_pengambilan_sumpah_pelantikan_fungsional', 'tmt_jabatan_fungsional', 'unit_kerja_fungsional', 'tgl_penerimaan_keppres', 'alasan_pemberhentian', 'ket_alasan_pemberhentian', 'tmt_pemberhentian', 'file_pendukung_pemberhentian', 'tgl_catatan_pemberhentian', 'catatan_pemberhentian', 'ket_pemberhentian', 'jabatan', 'no_sk_jabatan', 'tmt_jabatan', 'unit_kerja','file_data_jabatan', 'jabatan_lama', 'no_sk_jabatan_lama', 'tmt_jabatan_lama', 'unit_kerja_lama', 'file_data_jabatan_lama','jabatan_baru', 'unit_kerja_baru', 'file_data_jabatan_baru', 'no_surat_rekomendasi', 'tgl_surat_rekomendasi', 'file_data_rekomendasi', 'file_surat_pernyataan_rekomendasi', 'jabatan_data_kompetensi','nomor_sertifikat', 'tgl_sertifikat', 'file_data_kompetensi', 'jumlah', 'terisi', 'sisa', 'file_formasi_jabatan', 'file_skp_2', 'file_skp_2_dukungan_lainnya', 'tanggal_catatan', 'catatan', 'ket', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
