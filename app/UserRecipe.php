<?php

namespace Brew;

use Illuminate\Database\Eloquent\Model;

class UserRecipe extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_recipes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'recipe_id', 'is_creator'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
