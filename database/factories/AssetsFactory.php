<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Asset::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->id,
        'name' => $faker->unique()->name,
        'description' => $faker->unique()->description,
        'value' => $faker->unique()->value,
        'purchased' => $faker->unique()->purchased
    ];
});
