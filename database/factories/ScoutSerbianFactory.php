<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ScoutSerbian;
use Faker\Generator as Faker;

$factory->define(App\ScoutSerbian::class, function (Faker $faker) {
    return [
        'hiding' => 1,
        'night-vision' => 1,
        'knowledge-of-the-terrain' => 1,
        'equipment' => 1,
        'survival-in-the-jungle' => 1,
    ];
});

