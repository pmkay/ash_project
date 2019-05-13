<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Measurement;
use Faker\Generator as Faker;

$factory->define(Measurement::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'deflection' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
        'force' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
        // 'probe_id' => function () {
        //     return factory(App\Probe::class)->create()->id;
        // },
        // 'filter_id' => function () {
        //     return factory(App\Filter::class)->create()->id;
        // },
    ];
});
