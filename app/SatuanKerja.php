<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatuanKerja extends Model
{
    protected $table = 'satuan_kerjas';

    protected $fillable = [
        'id', 'nama', 'instansi_id'
    ];
}
