<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class enrollments extends Model
{
    protected $fillable = [
        'enrollment_date',
        'status'
    ];

    public function courses(){
        return $this->belongsTo(Courses::class);
    }

    public function students(){
        return $this->belongsTo(Students::class);
    }
}
?>