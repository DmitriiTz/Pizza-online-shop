<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Core\User;
use App\Entities\Order\Order;
use Faker\Generator as Faker;

$factory->define(Order ::class, function (Faker $faker) {

    $users = User::all();

    return [
        'user_id' => $faker->randomElement($users),
        'cost' => $faker->randomFloat(2, 0, 500),
    ];
});
