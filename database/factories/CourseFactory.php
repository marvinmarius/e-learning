<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name'   => $faker->sentence,
        'status' => $faker->randomElement(
        [
            'PUBLISHED','PENDING', 'REJECTED'
        ]),
        'description' => $faker->sentence,
        'slug'              => $faker->slug
    ];
});
