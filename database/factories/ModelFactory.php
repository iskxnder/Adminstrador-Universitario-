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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {


    return [
        'carrer_id' => rand(1,8),
        'name' => $faker->firstName($gender = null|'masculino'|'femenino'),
        'surname' => $faker->text(12),
        'document' => $faker->text(9),
        'email' => $faker->unique()->safeEmail,
        'sex' => $faker->title($gender = null|'masculino'|'femenino'),
        'nationality' => $faker->text(20),
    ];
});