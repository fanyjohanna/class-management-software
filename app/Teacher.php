<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'nip', 
        'name', 
        'course'
    ];

    public function classroom()
    {
        return $this->hasMany(Classroom::class);
    }
}
