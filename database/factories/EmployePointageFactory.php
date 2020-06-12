<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EmployePointage;
use Faker\Generator as Faker;

$factory->define(EmployePointage::class, function (Faker $faker) {

    return [
        'enmploye_id' => $faker->word,
        'date-service' => $faker->word,
        'num_carte' => $faker->word,
        'matricule_employe' => $faker->word,
        'mois' => $faker->word,
        'annees' => $faker->word,
        'heure_debut_service' => $faker->word,
        'heure_fin_service' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
