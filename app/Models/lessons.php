<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\HasMany;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class lessons extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'lesson_order'
    ];

    public function courses(){
        return $this->belongsTo(Courses::class);
    }

    public function material(){
        return $this->hasMany(Material::class);
    }
}
