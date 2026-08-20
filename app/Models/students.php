<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\HasMany;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class students extends Model
{
    protected $fillable = [
        'name',
        'email',
        'registration_no',
        'phone',
        'password'
    ];

    public function enrollments(){
        return $this->hasMany(Enrollments::class);
    }

    public function assignments(){
        return $this->belongsTo(Assignments::class);
    }
}
