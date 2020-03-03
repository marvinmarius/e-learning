<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Training extends Model

{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'level',
    ];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }



}
