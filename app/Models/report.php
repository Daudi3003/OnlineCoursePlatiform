<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class report extends Model
{
    protected $fillable = [
        'title',
        'description',
        'report_date'
    ];

    public function instructors(){
        return $this->belongsTo(Instructors::class);
    }

    public function courses(){
        return $this->belongsTo(Courses::class);
    }
}
