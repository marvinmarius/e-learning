<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Training::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'level' => $faker->randomElement(
            [
                'debutant','intermediaire', 'avancer'
            ]),
        'amount'=> $faker->randomFloat(),
        'duration'=> $faker->time(),


    ];
});
