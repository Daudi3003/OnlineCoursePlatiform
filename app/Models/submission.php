<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class submission extends Model
{
    protected $fillable = [
        'submission_file',
        'submitted_at',
        'score',
        'feedback'
    ];
}
