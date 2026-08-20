<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\HasMany;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class instructors extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    public function report(){
        return $this->hasMany(Report::class);
    }

    public function assignments(){
        return $this->hasMany(Courses::class);
    }

    public function material(){
         return $this->hasMany(Material::class);
    }

    public function Adminstrator(){
       return $this->belongsTo(Adminstrator::class);
    }
}
