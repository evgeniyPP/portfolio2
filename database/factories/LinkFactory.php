<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->realText(15),
        'link' => $faker->realText(15),
        'description' => $faker->realText(150)
    ];
});
