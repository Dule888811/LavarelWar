<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NatoTechnicalSoldiers;
use Faker\Generator as Faker;

$factory->define(App\NatoTechnicalSoldiers::class, function (Faker $faker) {
    return [
        'knowledge' => 'excellent',
        'name' => $faker->name,
    ];
});
