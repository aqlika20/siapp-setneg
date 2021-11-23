<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penolakan extends Model
{

    protected $table = 'penolakans';

    protected $fillable = [
        'id', 'id_usulan', 'id_layanan', 'id_pengirim', 'id_verifikator', 'nama_verifikator', 'tanggal_prosess_penolakan', 'alasan_penolakan'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
