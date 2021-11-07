<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'description' => $faker->text(200),
        'price' => $faker->randomFloat(2,5,100),
        'date' => $faker->dateTimeBetween('-10 years', '+ 5 years'),
    ];
});
