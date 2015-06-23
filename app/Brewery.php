<?php

namespace Brew;

use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'breweries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'city', 'state', 'website'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
