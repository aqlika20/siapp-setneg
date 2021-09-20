<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{

    protected $table = 'pangkat_gols';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
