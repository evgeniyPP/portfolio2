<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->realText(15),
        'type' => $faker->realText(15),
        'rank' => $faker->numberBetween(150, 300),
        'logo' => $faker->url()
    ];
});
