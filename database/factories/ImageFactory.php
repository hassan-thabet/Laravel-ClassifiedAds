<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl(800 , 600),
        'product_id' => $faker->randomElement([1 , 11 , 21 , 31 , 41 , 51 , 61 , 71 , 81 , 91 ,
            101 , 111 , 121 , 131 , 141 , 151 , 161 , 171 , 181 , 191 , 201 , 211 , 221 , 231 , 241 , 251 , 261
        , 271 , 281 , 291 ])
    ];
});
