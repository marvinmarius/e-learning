<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Subscription::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(
            [
                'MENSUELLE','ANNUELLE',
            ]),
        'amount'=> $faker->randomFloat(2,1),
        'card_number'=> $faker->creditCardNumber,
        'expiration_date'=> $faker->dateTime,
        'security_code'=> $faker->postcode,

    ];
});
