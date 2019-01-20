<?php

use Faker\Generator as Faker;

$factory->define(App\Praktikan::class, function (Faker $faker) {
    return [
        'nama' => $faker->text(12),
        'nim' => $faker->randomNumber(8),
        'kelas' => $faker->randomNumber(4)
    ];
});
