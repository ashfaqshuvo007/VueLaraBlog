<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Post;
use App\Subscriber;

$factory->define(Comment::class, function (Faker $faker) {
    $posts = Post::pluck('id')->toArray();
    $subscribers = Subscriber::pluck('id')->toArray();
    return [
        'owner_id' => $faker->randomElement($subscribers),
        'post_id' => $faker->randomElement($posts),
    ];
});
