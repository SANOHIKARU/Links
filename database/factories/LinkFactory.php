<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
	    'title' => substr($faker->sentence(2), 0, -1),
	    'url' => $faker->url,
	    'description' => $faker->paragraph,
    ];
});
