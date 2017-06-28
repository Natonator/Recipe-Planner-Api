<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * home page function to render welcome content
     *
     *
     **/
    public function index()
    {
        $name = 'Current User';
        return view('home', compact('name'));
    }
}
