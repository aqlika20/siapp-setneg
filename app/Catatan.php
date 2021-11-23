<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'notes';

    protected $fillable = [
        'id', 'id_usulan', 'id_layanan', 'id_pengirim', 'id_status', 'tanggal_catatan', 'catatan'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
