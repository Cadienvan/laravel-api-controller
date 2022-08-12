<?php

use Illuminate\Support\Str;
use Phpsa\LaravelApiController\Tests\Models\User;
use Faker\Generator as Faker;


//@TODO move to laravel 9 style

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->unique()->email,
        'email_verified_at' => now(),
        'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token'    => Str::random(10),
    ];
});
