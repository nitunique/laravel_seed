<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usermodel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Usermodel::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'address' => Str::random(10),
        'role_id' =>  rand(1,3),
    ];
});
