<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Probe;
use Faker\Generator as Faker;

$factory->define(Probe::class, function (Faker $faker) {
    return [
        'type' => 'test',
        'radius' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
        'spring_constant' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
        
    ];
});
