<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unsur extends Model
{
    protected $table = 'unsurs';

    protected $fillable = [
        'id', 'nama'
    ];

    protected $date = [
        'created_at'
    ];
}
