<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Quiz::class, function (Faker $faker) {
    return [
        'content' => $faker->word,
        'answers'=> $faker->sentence,
    ];
});
