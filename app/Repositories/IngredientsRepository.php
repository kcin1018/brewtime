<?php namespace Brew\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class IngredientsRepository extends Repository
{
    public function model()
    {
        return 'Brew\Ingredient';
    }
}
