<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    protected $fillable = [
        'title',
        'material_type',
        'file_url',
        'description',
        'upload_at'
    ];
}
