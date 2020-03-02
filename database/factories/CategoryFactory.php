<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'published' => $faker->numberBetween($min = 0, $max = 1)
    ];
});
