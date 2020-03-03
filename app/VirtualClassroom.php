<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VirtualClassroom extends Model
{
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
