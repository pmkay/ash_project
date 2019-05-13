<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Probe;
use Faker\Generator as Faker;

$factory->define(Probe::class, function (Faker $faker) {
    return [
        'type' => 'test',
        'radius' => $faker->randomDigit,
        'spring_constant' => $faker->randomDigit,
        'probeuse_id' => function () {
            return factory(App\Probeuse::class)->create()->id;
        }
    ];
});
