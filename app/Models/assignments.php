<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class assignments extends Model
{
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'score'
    ];

    public function instructors(){
        return $this->belongsTo(Instructors::class);
    }

    public function courses(){
        return $this->belongsTo(Courses::class);
    }

    public function students(){
        return $this->belongsTo(Students::class);
    }
    
}
