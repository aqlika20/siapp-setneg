<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikans';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at'
    ];
}
