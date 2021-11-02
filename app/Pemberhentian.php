<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemberhentian extends Model
{

    protected $table = 'pemberhentians';

    protected $fillable = [
        'id', 'tanggal_surat_usulan', 'no_surat_usulan', 'pejabat_menandatangani', 'file_data_usulan', 'nip', 'nama', 'tanggal_lahir', 'pendidikan_terakhir', 'instansi', 'pangkat_gol_baru', 'tmt_gol_baru', 'pangkat_lama', 'gol_ruang_lama', 'nomor_pak', 'tanggal_pak', 'jumlah_angka_kredit', 'periode_penilaian', 'file_data_pak', 'no_klarifikasi', 'tanggal_klarifikasi', 'file_klarifikasi_pak', 'tmt_lama', 'jabatan_terakhir', 'unit_kerja_terakhir', 'tmt_berhenti', 'tmt_pensiun', 'tanggal_catatan', 'ket', 'tanggal_surat_pengantar', 'no_surat_pengantar', 'no_keppres', 'tanggal_keppres', 'alasan_ralat', 'file_surat_pengantar', 'file_keppres', 'file_bukti_pendukung', 'masa_jabatan_start', 'masa_jabatan_end', 'tmt', 'hak_keuangan', 'tanggal_pelantikan', 'yang_melantik', 'file_ba_pelantikan', 'file_sumpah_jabatan', 'id_pengirim', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}
