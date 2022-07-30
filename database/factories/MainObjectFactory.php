<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\MainObject;
use Faker\Generator as Faker;


$factory->define(App\MainObject::class, function (Faker $faker) {
    return [
        'stubbornness_sr' => 0.53,
        'stubbornness_nato' => 0.8,
        'defense_sr' => 0.89,
        'defense_nato' => 0.7,
        'hidden_sr' => 1,
        'hidden_nato' => 0.1,
        'position_sr' =>(rand(5000,1000000)),
        'position_nato' =>(rand(5000,1000000)),
    ];
});
