<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //'titulo'=> $faker->title,
        'titulo'=> $faker->sentence(2,true),
        'descripcion'=> $faker->paragraph,
        'fecha'=> date('Y-m-d'),
        'estado'=>1
    ];
});
