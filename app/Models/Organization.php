<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
