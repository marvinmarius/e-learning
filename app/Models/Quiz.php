<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'content'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
