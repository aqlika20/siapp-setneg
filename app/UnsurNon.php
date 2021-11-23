<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnsurNon extends Model
{
    protected $table = 'unsur_nons';

    protected $fillable = [
        'id', 'nama'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
}
