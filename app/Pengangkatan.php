<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengangkatan extends Model
{

    protected $table = 'pengangkatans';

    protected $fillable = [
        'id', 'no_surat_usulan', 'tanggal_surat_usulan', 'pejabat_ttd', 'file_usulan', 'nip', 'nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_terakhir', 'instansi', 'file_nota_usul_asn_1', 'pangkat_gol', 'tmt_gol', 'tmt_cpns', 'masa_kerja_golongan_thn', 'masa_kerja_golongan_bln', 'file_nota_usul_asn_2', 'nomor_pak', 'tanggal_pak', 'jumlah_angka_kredit', 'periode_penilaian', 'file_data_pak', 'nomor_klarifikasi', 'tanggal_klarifikasi', 'file_klarifikasi_pak', 'no_keppres_jabatan', 'jabatan', 'file_jabatan', 'file_ba_pengambilan_sumpah_jabatan', 'tmt_jabatan', 'unit_kerja', 'pangkat_gol_baru', 'tmt_gol_baru', 'masa_kerja_gol_thn', 'masa_kerja_gol_bln', 'periode_kenaikan_pangkat', 'file_data_pendukung', 'tambah_catatan', 'tanggal_catatan', 'catatan', 'jenis_usulan','status'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
