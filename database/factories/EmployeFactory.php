<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employe;
use Faker\Generator as Faker;

$factory->define(Employe::class, function (Faker $faker) {

    return [
        'matircule' => $faker->word,
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'date_naissance' => $faker->word,
        'lieu_naissance' => $faker->word,
        'profession' => $faker->word,
        'service' => $faker->word,
        'email' => $faker->word,
        'adressse' => $faker->word,
        'photo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
