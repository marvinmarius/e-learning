<?php


namespace App\Repositories;


use App\Course;

class CourseRepository
{
    public function all()
    {
      return Course::all();
    }
}
