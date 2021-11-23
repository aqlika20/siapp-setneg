<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkn extends Model
{
    protected $table = 'bkns';

    protected $fillable = [
        'id', 'nip'
    ];

    protected $date = [
        'created_at'
    ];
}
