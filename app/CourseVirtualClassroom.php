<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseVirtualClassroom extends Model
{
    public function courseVirtualClassroom()
    {
        return $this->hasOne(Forum::class);
    }
}
