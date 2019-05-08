<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Probeuse;
use Faker\Generator as Faker;

$factory->define(Probeuse::class, function (Faker $faker) {
    return [
        'speed' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
        'contact_time' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
    ];
});
