<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'nim',
        'student_name',
        'classroom_id'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
