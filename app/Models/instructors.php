<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instructors extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];
}
