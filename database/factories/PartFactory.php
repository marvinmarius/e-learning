<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(\App\Part::class, function (Faker $faker) {
    return [
       'name'=> $faker->word,
        'part_number'=>$faker->numberBetween(1,10),
        'course_id' => Course::all()->random(),
    ];
});
