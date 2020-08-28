<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'icon_url' => $faker->imageUrl(512 , 512),
        'category_name' => $faker->word(),

    ];
});
