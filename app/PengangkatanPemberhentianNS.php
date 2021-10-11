<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengangkatanPemberhentianNS extends Model
{

    protected $table = 'pengangkatan_pemberhentian_ns';

    protected $fillable = [
        'id', 'tanggal_surat_pengantar', 'no_surat_pengantar', 'file_surat_pengantar', 'lns', 'unsur', 'nip', 'nama', 'instansi', 'instansi', 'jabatan_angkat', 'jabatan_berhenti', 'file_dhr', 'file_dukumen_lain_pengangkatan_ns', 'no_keppres', 'tanggal_keppres', 'masa_jabatan_start', 'masa_jabatan_end', 'tmt', 'hak_keuangan', 'tanggal_pelantikan', 'yang_melantik', 'file_ba_pelantikan', 'file_sumpah_jabatan', 'id_pengirim', 'jenis_layanan', 'status', 'distributor_id', 'group_id'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    public function notes()
    {
        return $this->belongsTo('App\Catatan');
    }

}