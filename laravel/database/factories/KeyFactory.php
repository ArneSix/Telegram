<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Key;
use Faker\Generator as Faker;

$factory->define(Key::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'value' => $faker->password(),
        'description' => $faker->text(),
    ];
});
