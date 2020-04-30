<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {

    return [
        'title' => $faker->unique()->sentence(3),
        'description' => $faker->text('200'),
        'cost' => $faker->randomFloat(2, 5, 50),
    ];
});
