<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at'
    ];
}
