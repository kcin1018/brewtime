<?php

namespace Brew\Http\Controllers;

use Illuminate\Http\Request;
use Brew\Http\Requests;
use Brew\Http\Controllers\Controller;
use Brew\Repositories\RecipesRepository as Recipe;
use Brew\Http\Requests\Recipe as RecipeRequest;

class RecipeController extends Controller
{
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return ['recipes' => $this->recipe->orderBy('name')->get()];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(RecipeRequest $request)
    {
        $recipe = $this->recipe->create($request->all());

        return ['recipe' => $recipe];
    }

    /**
     * Display the specified resource.
     *
     * @param  int $recipeId
     * @return Response
     */
    public function show($recipeId)
    {
        $recipe = $this->recipe->find($recipeId);

        return ['recipe' => $recipe];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $recipeId
     * @return Response
     */
    public function edit(Recipe $recipeId)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $recipeId
     * @return Response
     */
    public function update($recipeId)
    {
        $recipe = $this->recipe->update($request->all(), $recipeId);

        return ['recipe' => $recipe];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $recipeId
     * @return Response
     */
    public function destroy($recipeId)
    {
        $this->recipe->delete($recipeId);
    }
}
