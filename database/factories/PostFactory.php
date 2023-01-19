<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'user_id' => factory(App\User::class),
    ];
});
