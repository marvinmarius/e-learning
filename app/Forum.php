<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function courseVirtualClassroom()
    {
        return $this->belongsTo(CourseVirtualClassroom::class);
    }
}
