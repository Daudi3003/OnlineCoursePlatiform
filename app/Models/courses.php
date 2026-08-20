<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\HasMany;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class courses extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration',
    ];

    public function assignments(){
        return $this->hasMany(Assignments::class);
    }

    public function report(){
        return $this->hasMany(Report::class);
    }

    public function enrollments(){
        return $this->hasMany(Enrollments::class);
    }

    public function lessons(){
        return $this->hasMany(Lessons::class);
    }

    public function instructors(){
        return $this->belongsTo(Instructors::class);
    }

    public function Adminstrator(){
        return $this->belongsTo(Adminstrator::class);
    }
}

?>