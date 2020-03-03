<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubPart extends Model
{
    public function Part()
    {
        return $this->belongsTo(Part::class);
    }


}
