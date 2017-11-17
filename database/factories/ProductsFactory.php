<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
	$category = \App\Category::inRandomOrder()->first();
	$brand = \App\Brand::inRandomOrder()->first();
    return [
        "name" => $faker->word,
        "stock" => $faker->numberBetween(0,100),
        "price" => $faker->randomFloat(NULL,0, 10000),
        "description" => $faker->text,
        "category_id" => $category->id ,
        "brand_id" => $brand->id
    ];
});
