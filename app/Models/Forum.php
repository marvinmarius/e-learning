<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function course()
    {
        return $this->hasOne(Forum::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
