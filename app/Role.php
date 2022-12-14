<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];
    
}
