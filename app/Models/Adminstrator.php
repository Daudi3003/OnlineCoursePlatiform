<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adminstrator extends Model
{

protected $fillable = [
    'name',
    'password',
    'email',
    'phone'
];

}

?>
