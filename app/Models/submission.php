<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\BelongsTo;

class submission extends Model
{
    protected $fillable = [
        'submission_file',
        'submitted_at',
        'score',
        'feedback'
    ];

    public function assignments(){
        return $this->belongsTo(Assignments::class);
    }

    public function students(){
        return $this->belongsTo(Students::class);
    }
}
