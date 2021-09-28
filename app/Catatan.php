<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'catatan';

    protected $fillable = [
        'id', 'jenis_layanan', 'catatan', 'tanggal_catatan'
    ];

}
