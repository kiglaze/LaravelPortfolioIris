<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WorkSample;
use Faker\Generator as Faker;

$factory->define(WorkSample::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'description' => $faker->paragraph,
        'code_link' => "www.github.com",
        'direct_link' => "www.google.com"
    ];
});
