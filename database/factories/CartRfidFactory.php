<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CartRfid;
use Faker\Generator as Faker;

$factory->define(CartRfid::class, function (Faker $faker) {

    return [
        'employe_id' => $faker->randomDigitNotNull,
        'is_valid' => $faker->word,
        'matricule' => $faker->word,
        'numero_carte' => $faker->word,
        'identifiant_carte' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
