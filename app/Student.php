<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function virtualclassroom()
    {
        return $this->belongsToMany(VirtualClassroom::class);
    }
}
