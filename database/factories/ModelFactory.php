<?php

use App\User;
use App\Models\Post;
use Faker\Generator;
use App\Models\Comentario;

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Post::class, function (Generator $faker) {
    return [
        'titulo'        => $faker->sentence,
        'texto'         => $faker->paragraph(30),
        'user_id'       => rand(1, 10)
    ];
});

$factory->define(Comentario::class, function (Generator $faker) {
    return [
        'user_id'   => rand(1, 10),
        'post_id'   => rand(1, 25),
        'texto'     => $faker->paragraph
    ];
});
