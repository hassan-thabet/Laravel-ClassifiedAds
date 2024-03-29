<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'photo_url'=> $faker->imageUrl(512 , 512),
        'mobile' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified' => $faker->randomElement([ false , true]),
        'mobile_verified' => $faker->randomElement([ false , true]),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'api_token' => bin2hex(openssl_random_pseudo_bytes(30)),
        'remember_token' => Str::random(10),
    ];
});
