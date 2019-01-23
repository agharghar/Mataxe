<?php

use Faker\Generator as Faker;

$factory->define(App\aderant::class, function (Faker $faker) {
    return [
    	'nom' => $faker->unique()->name,
    	'prenom' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'identifiant_fiscal' => $faker->swiftBicNumber,
        'code_dacces' => $faker->swiftBicNumber,
        'tele' => $faker->e164PhoneNumber,
        'cin' => $faker->swiftBicNumber ,
        'fonciers' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'salariaux' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'autre_sources' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'path' => $faker->url  ,
        
    ];
});
