<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Doador::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nome' => $faker->name,
        'sobrenome' => $faker->firstName,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'data_nasc' => $faker->dateTime
    ];
});
