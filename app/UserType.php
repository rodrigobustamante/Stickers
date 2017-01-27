<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = [
        'type'
    ];

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
