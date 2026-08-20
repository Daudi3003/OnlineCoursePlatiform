<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Eloquent\Relations\HasMany;

class Adminstrator extends Model
{

protected $fillable = [
    'name',
    'password',
    'email',
    'phone'
];

public function instructors()
{
    return $this->hasMany(Instructors::class);
}

public function courses()
{
    return $this->hasOne(Courses::class);
}

public function students(){
    return $this->hasMany(Students::class);
}


}
?>
