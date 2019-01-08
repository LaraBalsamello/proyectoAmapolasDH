<?php

use Faker\Generator as Faker;

$factory->define(App\Status::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(array ('activo', 'finalizado','cancelado')),
    ];
});
