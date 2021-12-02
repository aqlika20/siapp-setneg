<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RKPList extends Model
{
    protected $table = 'rkp_asns';

    protected $fillable = [
        'id', 'id_usulan', 'id_layanan', 'id_pengirim', 'nip', 'id_rkp'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
