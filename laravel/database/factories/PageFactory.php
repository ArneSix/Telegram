<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug(),
        'title' => $faker->text(),
        'layout' => $faker->word(),
        'intro'=> $faker->text(),
        'body' => $faker->randomHtml(4),
    ];
});
