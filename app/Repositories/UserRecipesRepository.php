<?php namespace Brew\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class UserRecipesRepository extends Repository
{
    public function model()
    {
        return 'Brew\UserRecipe';
    }
}
