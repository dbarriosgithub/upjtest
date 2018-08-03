<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Pais::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'cod' => $faker->postcode 
    ];
});
