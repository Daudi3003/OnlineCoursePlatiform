<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enrollments extends Model
{
    protected $fillable = [
        'enrollment_date',
        'status'
    ];
}
