<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'stack' => $faker->realText(15),
        'description' => $faker->realText(150),
        'github_link' => $faker->url(),
        'preview_link' => $faker->url(),
        'image_url' => $faker->imageUrl()
    ];
});
