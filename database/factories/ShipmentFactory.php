<?php

use Faker\Generator as Faker;

$factory->define(App\Shipment::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(array ('bici', 'walker','avion')),
    ];
});
