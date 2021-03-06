<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Questao;
use Faker\Generator as Faker;

$factory->define(Questao::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(6,true),
        'descricao' => $faker->sentence(10)
    ];
});
