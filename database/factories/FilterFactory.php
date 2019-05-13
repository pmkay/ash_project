<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Filter;
use Faker\Generator as Faker;

$factory->define(Filter::class, function (Faker $faker) {
    return [
        'type' => $faker->word,
        'application' => $faker->word,
        'provider_id' => function () {
            return factory(App\Provider::class)->create()->id;
        },
    ];
});
