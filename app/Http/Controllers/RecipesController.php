<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
    * index w/view
    *
    * Get list of user's recipes and render view
    *
    **/
    public function index()
    {
        return view('recipe.index');
    }

    /**
    * Edit Recipe
    *
    * Get recipe and render edit view
    *
    * @param type var $id
    **/
    public function edit($id)
    {
        return view('recipe.form');
    }

    /**
    * update
    *
    * put method for updating method
    *
    * @param type var $id
    **/
    public function update($id)
    {
        // on success
        return view('recipe.index');

        // on failure, with message
        return view('recipe.form');
    }

    /**
    * show
    *
    * Get One recipe to show/see edit
    *
    * @param type var $id
    **/
    public function show($id)
    {
        return view('recipe.recipe');
    }

    /**
    * create
    *
    * render view and rules for creating a recipe
    *
    **/
    public function create()
    {
        return view('recipe.form');
    }

    /**
    * store
    *
    *  post method to create a new recipe
    *
    **/
    public function store()
    {
        // on success
        return view('recipe.index');

        // on failure, with message
        return view('recipe.form');
    }

    /**
    * destroy
    *
    * delete method to delete a recipe
    *
    * @param type var $id
    **/
    public function destroy($id)
    {
        // on success
        return view('recipe.index');

        // on failure, with message
        return view('recipe.recipe');
    }
}
