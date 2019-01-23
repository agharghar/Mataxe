<?php

use Faker\Generator as Faker;

$factory->define(App\nonaderant::class, function (Faker $faker) {
    return [
        'nom' => $faker->unique()->name,
    	'prenom' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'login' => $faker->unique()->userName,
        'password' => $faker->password,
        'tele' => $faker->e164PhoneNumber,
        'cin' => $faker->swiftBicNumber ,
        'fonciers' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'salariaux' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'autre_sources' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'path' => $faker->url  ,
    ];
});
