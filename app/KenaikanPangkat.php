<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KenaikanPangkat extends Model
{

    protected $table = 'kenaikan_pangkats';

    protected $fillable = [
        'id', 'tanggal_surat_usulan', 'no_surat_usulan', 'pejabat_menandatangani', 'file_data_usulan', 'nip', 'nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_terakhir', 'instansi', 'instansi_induk', 'instansi_pengusul', 'pangkat_gol', 'tmt_gol', 'tmt_cpns', 'masa_kerja_gol_tahun', 'masa_kerja_gol_bulan', 'file_nota_usulan_asn', 'file_nota_usulan','nomor_pak', 'tanggal_pak', 'jumlah_angka_kredit', 'periode_penilaian', 'file_data_pak', 'nomor_klarifikasi', 'tanggal_klarifikasi', 'file_klarifikasi_pak', 'jabatan', 'no_keppress_jabatan', 'tmt_jabatan', 'unit_kerja', 'jabatan_lama', 'no_sk_jabatan_lama', 'tmt_jabatan_lama', 'unit_kerja_lama', 'file_data_jabatan_lama','jabatan_baru', 'unit_kerja_baru', 'file_data_jabatan_baru', 'jabatan_data_kompetensi','nomor_sertifikat', 'tanggal_sertifikat', 'file_data_kompetensi', 'jumlah', 'terisi', 'sisa', 'file_formasi_jabatan', 'file_skp_2', 'file_skp_2_dukungan_lainnya', 'ket', 'no_keppres', 'tanggal_keppres', 'masa_jabatan_start', 'masa_jabatan_end', 'tmt', 'hak_keuangan', 'tanggal_pelantikan', 'yang_melantik', 'file_ba_pelantikan', 'file_sumpah_jabatan', 'pangkat_gol_baru', 'tmt_gol_baru', 'masa_kerja_gol_tahun_baru', 'masa_kerja_gol_bulan_baru', 'periode_kenaikan', 'tanggal_surat_pengantar', 'no_surat_pengantar', 'alasan_ralat', 'file_surat_pengantar', 'file_keppres', 'file_bukti_pendukung', 'id_pengirim', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}
