<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Forum;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title'        => $faker->sentence,
        'content' => $faker->text,
        'reply' => $faker->randomNumber(1),
        'forum_id' => Forum::all()->random()->id,

    ];
});
