<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discography;
use Faker\Generator as Faker;

$factory->define(Discography::class, function (Faker $faker) {
    return [
        'artist' => $faker->text(20),
        'title' => $faker->text(20),
        'cover' => $faker->text(20),
        'genre' => $faker->text(20),
        'year' => $faker->date('Y-m-d'),
    ];
});
