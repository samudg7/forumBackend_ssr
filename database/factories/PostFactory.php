<?php

namespace Database\Factories;

use Faker\Generator as Faker;

use App\Models\User;
use App\Models\Post;


if (isset($factory)) {
    $factory->define(Post::class, function (Faker $faker) {
        $title = $faker->sentence;
        return [
            'title' => $title,
            'body' => $faker->text,
            'name' => $faker->name,
            // 'user_id' => function () {
            //     return User::all()->random();
            // }

        ];
    });
}

