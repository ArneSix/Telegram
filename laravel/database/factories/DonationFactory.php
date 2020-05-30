<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donation;
use Faker\Generator as Faker;

$factory->define(Donation::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'message' => $faker->text(),
        'amount' => $faker->numberBetween(0, 50),
    ];
});
