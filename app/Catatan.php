<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'notes';

    protected $fillable = [
        'id', 'jfku_id', 'catatan', 'tanggal_catatan'
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

}
