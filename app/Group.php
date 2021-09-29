<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $table = 'groups';

    protected $fillable = [
        'id', 'name'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
