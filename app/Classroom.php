<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable=[
        'class_name',
        'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
