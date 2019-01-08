<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'price' => $faker->numberBetween(1, 1000),
        'description' => $faker->sentence(5),
        'image' => 'avatars/default.jpg',
        'stock' => $faker->numberBetween(1,20),
        'flavour' => $faker->randomElement(array ('dulce', 'salado')),
    ];
});
