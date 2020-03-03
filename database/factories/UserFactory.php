<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\User;
use Faker\Generator as Faker;
use Faker\Provider\Image;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $name      = $faker->name;
    $last_name = $faker->lastName;

    return [

        'name'           => $name,
        'last_name'      => $last_name,
        'username'      => $faker->word,
        'slug'           => $faker->slug($name . " " . $last_name, '-'),
        'email'          => $faker->unique()->safeEmail,
        'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'last_connexion_date' => $faker->dateTime,
        'email_verified_at' => $faker->dateTime,
        'group_id' => \App\Group::all()->random()->id,
        'subscription_id' => \App\Subscription::all()->random()->id,
        'student_id' => \App\Student::all()->random()->id,
        'teacher_id' => \App\Teacher::all()->random()->id,
        'forum_id' => \App\Forum::all()->random()->id,


    ];
});
