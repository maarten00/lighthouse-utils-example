<?php

use App\Models\Article;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    $user = User::inRandomOrder()->first();
    $article = Article::inRandomOrder()->first();

    return [
        'content' => $faker->realText($faker->numberBetween(200, 450)),
        'article_id' => $article->id,
        'user_id' => $user->id,
    ];
});
