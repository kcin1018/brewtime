<?php

namespace Brew\Http\Controllers;

use Illuminate\Http\Request;
use Brew\Http\Requests;
use Brew\Http\Controllers\Controller;
use Brew\Repositories\RecipesRepository as Recipe;

class PageController extends Controller
{
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
        $this->middleware('auth');
    }

    public function home(Request $request)
    {
        return view('page.home');
    }

    public function recipes(Request $request)
    {
        $recipes = $this->recipe->fetchRecipes(true);

        return view('page.recipes', compact('recipes'));
    }

    public function search(Request $request)
    {
        return view('page.search');
    }
}
