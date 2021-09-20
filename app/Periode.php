<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{

    protected $table = 'periodes';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
