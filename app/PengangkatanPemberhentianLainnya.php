<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengangkatanPemberhentianLainnya extends Model
{

    protected $table = 'pengangkatan_pemberhentian_lainnya';

    protected $fillable = [
        'id', 'tanggal_surat_pengantar', 'no_surat_pengantar', 'file_surat_pengantar', 'jabatan_lainnya', 'unsur', 'unsur_non', 'nip', 'nama', 'instansi', 'jabatan_angkat', 'jabatan_berhenti', 'file_dhr', 'file_dukumen_lain_pengangkatan_lainnya', 'no_keppres', 'tanggal_keppres', 'masa_jabatan_start', 'masa_jabatan_end', 'tmt', 'hak_keuangan', 'tanggal_pelantikan', 'yang_melantik', 'file_ba_pelantikan', 'file_sumpah_jabatan', 'formasi', 'formasi_terisi_start', 'formasi_terisi_end', 'no_surat_persetujuan', 'tanggal_surat_persetujuan', 'kepada_menteri', 'nama_staff_khusus', 'alasan_ralat', 'file_keppres', 'file_bukti_pendukung', 'id_pengirim', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}
