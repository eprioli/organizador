<?php

use Faker\Generator as Faker;

$factory->define(App\model\Grupo::class, function (Faker $faker) {
    return [
      'nome' => str_random(10),
      'descricao' => $faker->text($maxNbChars = 350),
      'grupo_id' => 1,
    ];
});
