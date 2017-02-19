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
        'name' => 'Ali Imran', //$faker->name,
        'email' => 'aliimran@gmail.com', //$faker->unique()->safeEmail,
        'username' => 'aliimran',
        'password' => 'std123', //$password ?: $password = bcrypt('secret'),
        'active' => 1,
        //'remember_token' => str_random(10),
    ];
});
