<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surats';

    protected $fillable = [
        'id', 'description', 'id_rkp', 'status'
    ];

    protected $date = [
        'created_at'
    ];
}
