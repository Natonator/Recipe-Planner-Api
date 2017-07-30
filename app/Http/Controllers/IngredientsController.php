<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    /**
    * list w/view
    *
    * Get list of user's shopping list and return view
    *
    **/
    public function list()
    {
        return view('shopping.shoppingList');
    }

}
