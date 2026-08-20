<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class material extends Model
{
    protected $fillable = [
        'title',
        'material_type',
        'file_url',
        'description',
        'upload_at'
    ];

    public function instructors(){
        return $this->belongsTo(Instructors::class);
    }
    public function lessons(){
        return $this->belongsTo(Lessons::class);
    }

    public function students(){
        return $this->belongsTo(Students::class);
    }
}
