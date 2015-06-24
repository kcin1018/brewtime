<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Brew\User;
use Brew\Recipe;
use Brew\UserRecipe;
use Brew\Style;
use Brew\Brewery;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // clear the data
        UserRecipe::truncate();
        Recipe::truncate();
        User::truncate();
        Style::truncate();
        Brewery::truncate();

        // generate the data
        factory(User::class, 50)->create();
        factory(Style::class, 25)->create();
        factory(Brewery::class, 500)->create();
        factory(Recipe::class, 150)->create();
        factory(UserRecipe::class, 300)->create();

        Model::reguard();
    }
}
