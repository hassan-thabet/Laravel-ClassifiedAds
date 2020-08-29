<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(2 , 10 , 499),
        'status' => $faker->randomElement(['pending' , 'active']),
        'user_id' => 1,
        'category_id' => 1
    ];
});
