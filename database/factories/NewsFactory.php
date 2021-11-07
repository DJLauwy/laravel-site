<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'header' => $faker->text(20),
        'post' => $faker->text(20),
        'image' => 'https://thiscatdoesnotexist.com/',
    ];
});
