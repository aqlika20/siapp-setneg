<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{

    protected $table = 'users';

    protected $fillable = [
        'name', 'nip', 'password', 'roles_id', 'groups_id', 'api_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $date = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() 
    {
        return $this->belongsTo('App\Role');
    }
    
}
