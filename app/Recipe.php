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
    protected $fillable = ['brewery_id', 'style_id', 'name', 'type', 'yield', 'original_g', 'final_g', 'alcohol', 'bitterness'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function creators()
    {
        return $this->hasMany('Brew\UserRecipe', 'recipe_id', 'id')
            ->where('recipe_id', '=', $this->id);
    }

    public function brewery()
    {
        return $this->belongsTo('Brew\Brewery', 'brewery_id', 'id');
    }

    public function style()
    {
        return $this->belongsTo('Brew\Style', 'style_id', 'id');
    }
}
