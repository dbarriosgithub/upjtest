<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Persona::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'email' => $faker->email,
        'address' => $faker->address,
        'celphone' => $faker->phoneNumber,
        'pais_id' =>1 ,
        'departamento_id' =>1 ,
        'municipio_id' =>1 ,
    ];
});
