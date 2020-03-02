<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    //Foreign Keys inside factory (One to Many relationships)
    $categories = Category::pluck('id')->toArray();
    $authors = User::pluck('id')->toArray();
    return [
        'cat_id' => $faker->randomElement($categories),
        'author_id' => $faker->randomElement($authors),
        'title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'excerpt' => $faker->text($maxNbChars = 25),
        'desc' => $faker->text($maxNbChars = 200),
        'media' => $faker->imageUrl($width = 800, $height = 600),
        'published' => $faker->numberBetween($min = 0, $max = 1),
        'desc' => $faker->text($maxNbChars = 200),
    ];
});
