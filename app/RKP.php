<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RKP extends Model
{
    protected $table = 'rkps';

    protected $fillable = [
        'id', 'pengirim', 'penandatangan', 'penerima', 'no_memo_rkp', 'tanggal_memo', 'hal', 'id_usulan', 'id_layanan', 'id_pengirim', 'nip', 'status'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
