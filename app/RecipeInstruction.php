<?php

namespace Brew;

use Illuminate\Database\Eloquent\Model;

class RecipeInstruction extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipe_instructions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ingredient_id', 'amount', 'description'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
