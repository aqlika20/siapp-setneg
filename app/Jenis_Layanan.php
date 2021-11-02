<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_Layanan extends Model
{
    protected $table = 'jenis_layanans';

    protected $fillable = [
        'id', 'nama'
    ];

    protected $date = [
        'created_at'
    ];
}
