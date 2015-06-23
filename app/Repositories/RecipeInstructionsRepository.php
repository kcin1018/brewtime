<?php namespace Brew\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class RecipeInstructionsRepository extends Repository
{
    public function model()
    {
        return 'Brew\RecipeInstruction';
    }
}
