<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EmployeSortiePointage;
use Faker\Generator as Faker;

$factory->define(EmployeSortiePointage::class, function (Faker $faker) {

    return [
        'employe_id' => $faker->word,
        'jour' => $faker->word,
        'mois' => $faker->word,
        'annes' => $faker->word,
        'heure_sortie' => $faker->word,
        'heure_retour' => $faker->word,
        'numero_carte' => $faker->word,
        'matricule_employe' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
