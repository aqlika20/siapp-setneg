<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RKP extends Model
{
    protected $table = 'rkps';

    protected $fillable = [
        'id', 'pengirim', 'penandatangan', 'penerima', 'no_memo_rkp', 'tanggal_memo', 'hal', 'tanggal_keppres_maju', 'tanggal_keppres_turun', 'no_keppres', 'file_keppres', 'status'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
