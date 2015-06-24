<?php namespace Brew\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class RecipesRepository extends Repository
{
    public function model()
    {
        return 'Brew\Recipe';
    }

    public function fetchRecipes()
    {
        // build the model
        $recipeModel = new $this->model();

        // build the base model
        $recipes = $recipeModel->with(['creators', 'creators.user'])
            ->join('user_recipes', 'user_recipes.recipe_id', '=', 'recipes.id')
            ->orderBy('name')
            ->groupBy('recipes.id');

        // limit on only users' recipes
        $recipes->where('user_recipes.user_id', '=', auth()->user()->id);

        // return all recipes
        return $recipes->get();
    }
}
