<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'text' => $faker->sentence(10),
        'image' => '',
        'user_id' => 1,
        'category_id' => random_int(1,6)
    ];
});

