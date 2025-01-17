<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug(),
        'title' => $faker->title(),
        'content' => $faker->text(),
        'image' => $faker->imageUrl(),
    ];
});
