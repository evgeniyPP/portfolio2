<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Main;

$factory->define(Main::class, function () {
    return [
        'type' => 'contacts',
        'name' => 'по телефону',
        'text' => '8-985-385-81-46',
    ];
});
