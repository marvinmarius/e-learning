<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}
