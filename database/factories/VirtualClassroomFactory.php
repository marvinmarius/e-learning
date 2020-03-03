<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\VirtualClassroom::class, function (Faker $faker) {
    return [
        'class_size'=>$faker->numberBetween(1,25),
        'teacher_id'=>\App\Teacher::all()->random()->id,
    ];
});
