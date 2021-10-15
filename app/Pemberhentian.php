<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemberhentian extends Model
{

    protected $table = 'pemberhentians';

    protected $fillable = [
        'id', 'tanggal_surat_usulan', 'no_surat_usulan', 'pejabat_menandatangani', 'file_data_usulan', 'nip', 'nama', 'tanggal_lahir', 'pendidikan_terakhir', 'instansi', 'pangkat_gol_baru', 'tmt_gol_baru', 'pangkat_lama', 'gol_ruang_lama', 'nomor_pak', 'tanggal_pak', 'jumlah_angka_kredit', 'periode_penilaian', 'file_data_pak', 'no_klarifikasi', 'tanggal_klarifikasi', 'file_klarifikasi_pak', 'tmt_lama', 'jabatan_terakhir', 'unit_kerja_terakhir', 'tmt_berhenti', 'tmt_pensiun', 'tanggal_catatan', 'ket', 'id_pengirim', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}
