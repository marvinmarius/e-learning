<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Forum;
use Faker\Generator as Faker;

$factory->define(Forum::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'course_id' => Course::all()->random()->id,
    ];
});
