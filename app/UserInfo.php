<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'userId', 'name', 'contactNumber', 'address',
    ];
}
