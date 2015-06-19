<?php

namespace Brew;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['creator_id', 'name', 'style'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
