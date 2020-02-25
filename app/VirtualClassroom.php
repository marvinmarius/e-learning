<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VirtualClassroom extends Model
{
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
