<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'users';

    public function users()
    {
	    return $this->hasMany('App\Models\User', 'users', 'id');
    }
}
