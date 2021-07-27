<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;


if (isset($factory)) {
    $factory->define(User::class, function (Faker $faker) {
        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
        ];
    });
}
