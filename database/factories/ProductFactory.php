<?php

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'price' => $faker->numberBetween($min = 1000, $max = 9000),
        'image' => $faker->image($dir = '/public/storage/product_images', $width = 100, $height = 100),
        'stock' => $faker->numberBetween($min =5, $max =20),
    ];
});
