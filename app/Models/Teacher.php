<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function virtualclassroom()
    {
        return $this->hasMany(VirtualClassroom::class);
    }
}
