<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Probeuse;
use Faker\Generator as Faker;

$factory->define(Probeuse::class, function (Faker $faker) {
    return [
        'speed' => $faker->randomDigit,
        'contact_time' => $faker->randomDigit,
    ];
});
