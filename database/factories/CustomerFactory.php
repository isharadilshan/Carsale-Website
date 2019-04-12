<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Admin\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'email' => $faker->email,
        'phone' => rand(22486, 22486 + 1000),
        'nic' => rand(100000, 10000000)
    ];
});
