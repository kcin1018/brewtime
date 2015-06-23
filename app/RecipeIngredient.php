<?php

namespace Brew;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipe_ingredients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
