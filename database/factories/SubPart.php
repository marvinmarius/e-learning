<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\SubPart::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'sub_part_number'=>$faker->numberBetween(1,10),
        'part_id'=> \App\Part::all()->random()->id,
    ];
});
