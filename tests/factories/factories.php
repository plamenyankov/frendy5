<?php

$factory('App\Category', [
    'name' => $faker->word
]);
$factory('App\Products', [
    'category_id' => 'factory:App\Category',
    'brand' =>$faker->company,
    'model' => $faker->word,
    'description'=>$faker->sentence(),
    'availability'=>1,
    'quantity'=>$faker->numberBetween(1,100),
    'price'=>$faker->numberBetween(1,100)
]);