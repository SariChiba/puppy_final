<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product' => $faker->name,
        'description' => $faker->text,
        'price' => rand(1,500),
        'picture' => $faker->name,
        'category_id' => rand(1,10)
    ];
});
