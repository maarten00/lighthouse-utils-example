<?php

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    $user = User::inRandomOrder()->first();

    return [
        'title' => $faker->realText($faker->numberBetween(45, 125)),
        'content' => $faker->realText($faker->numberBetween(400, 1250)),
        'user_id' => $user->id,
    ];
});
