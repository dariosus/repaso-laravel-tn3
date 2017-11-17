<?php

use Faker\Generator as Faker;

$categories = \App\Category::all();
$brands = \App\Brand::all();


$factory->define(App\Product::class, function (Faker $faker) use ($categories, $brands) {
    return [
        "name" => $faker->word,
        "stock" => $faker->numberBetween(0,100),
        "price" => $faker->randomFloat(NULL,0, 10000),
        "description" => $faker->text,
        "category_id" => $categories->random()->id ,
        "brand_id" => $brands->random()->id
    ];
});
