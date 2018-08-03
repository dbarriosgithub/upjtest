<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Departamento::class, function (Faker $faker) {
    return [
      'name' => $faker->state,
      'pais_id'=>1
    ];
});
