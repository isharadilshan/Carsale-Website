<?php

use Faker\Generator as Faker;
use App\Model\User\cars;
use App\Model\User\categories;
use App\Model\Admin\Customer;

$factory->define(App\Model\Admin\InventoryCar::class, function (Faker $faker) {
    return [
        'engine_no' => str_random(10),
        'chasis_no' => str_random(10),
        'car_id' => function() {
            return cars::inRandomOrder()
                        ->first()
                        ->id;
        },
        'category_id' => function() {
            return categories::inRandomOrder()
                    ->first()
                    ->id;
        },
        'customer_id' => function() {
            return Customer::inRandomOrder()
                        ->first()
                        ->id;
        }
    ];
});
