ezez<?php

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
        'slug'  => $faker->slug,
        'content' => $faker->paragraph,
        'duration' => $faker->time('H'),
        'picture'=> $faker->image(),
        'video'=>$faker->url,
        'teacher_id'=>\App\Teacher::all()->random()->id,
        'subcategory_id'=>\App\SubCategory::all()->random()->id,
    ];
});
