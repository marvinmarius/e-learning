<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'description', 'content',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    public function virtualClassroom()
    {
        return $this->belongsToMany(VirtualClassroom::class);
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}
