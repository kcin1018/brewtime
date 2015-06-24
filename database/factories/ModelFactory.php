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

$factory->define(Brew\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Brew\Style::class, function ($faker) {
    return [
        'category' => $faker->sentence(1),
        'name' => $faker->sentence(mt_rand(1, 2)),
    ];
});

$factory->define(Brew\Brewery::class, function ($faker) {
    return [
        'name' => $faker->sentence(mt_rand(1, 2)),
        'city' => $faker->city(),
        'state' => $faker->stateAbbr(),
        'website' => (mt_rand(0, 100) > 40) ? $faker->url() : null,
    ];
});

$factory->define(Brew\Recipe::class, function ($faker) {
    $types = ['All Grain', 'Extract', 'Partial Mash'];

    return [
        'brewery_id' => (int)mt_rand(1, 500),
        'style_id' => (int)mt_rand(1, 25),
        'name' => $faker->sentence(mt_rand(3, 5)),
        'type' => $types[array_rand($types)],
        'yield' => (mt_rand(0, 100) > 60) ? '2.5 gal' : '5.0 gal',
        'original_g' => $faker->randomFloat(3, 1, 1.05),
        'final_g' => $faker->randomFloat(3, 1, 1.05),
        'alcohol' => $faker->randomFloat(1, 4, 14),
        'bitterness' => $faker->numberBetween(0, 100),
    ];
});

$factory->define(Brew\UserRecipe::class, function ($faker) {
    return [
        'user_id' => (int)mt_rand(1, 50),
        'recipe_id' => (int)mt_rand(1, 150),
        'is_creator' => (mt_rand(0, 100) > 70) ? 1 : 0,
    ];
});
