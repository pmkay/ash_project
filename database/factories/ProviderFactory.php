<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'address' => $faker->streetAddress,
        // 'filter_id' => function () {
        //     return factory(App\Filter::class)->create()->id;
        // }
    ];
});
