<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'detail' => $faker->text($max = 100),
        'price' => $faker->numberBetween(500,100),
        'stock' => $faker->numberBetween(1,100),
        'discount' => $faker->numberBetween(10,50),
    ];
});
