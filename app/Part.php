<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function subParts()
    {
        return $this->hasMany(SubPart::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }


}
