<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanPAK extends Model
{
    protected $table = 'jabatan_paks';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at'
    ];
}
