<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Municipio::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'departamento_id'=>1
    ];
});
