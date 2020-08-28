<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class , 100)->create();
        factory(\App\Product::class ,200)->create();
        factory(\App\Image::class, 400)->create();
        factory(\App\Category::class, 14)->create();

    }
}
