<?php

use Faker\Generator as Faker;

$factory->define(App\Programme::class, function (Faker $faker) {
    return [
        'title'     => $faker->name,
        'channel'   => $faker->name,
        'repeat'    => $faker->boolean,
        'genre'     => $faker->name,
        'broadcast' => $faker->dateTime,
    ];
});
