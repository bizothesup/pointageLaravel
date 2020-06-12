<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PointageParam;
use Faker\Generator as Faker;

$factory->define(PointageParam::class, function (Faker $faker) {

    return [
        'heure_debut_service' => $faker->word,
        'heure_fin_service' => $faker->word,
        'nombre_heure_travail' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
