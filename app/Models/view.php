<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class view extends Model
{
    protected $fillable = [
        'viewed_at'
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function students(){
        return $this->belongsTo(Students::class);
    }
}
