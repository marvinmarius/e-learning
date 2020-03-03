<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\SubCategory::class, function (Faker $faker) {
    return [
        'name'        => $faker->RandomElement(
            ['PHP', 'JAVASCRIPT', 'JAVA', 'SQL', 'POO', 'PHYTON', 'C++', 'NOSQL', 'BIGDATA', 'DESEÑO WEB', 'LINUX', 'SERVIDORES', 'AMAZON WEB SERVICES']
        ),
        'category_id'=> \App\Category::all()->random()->id,
    ];
});
