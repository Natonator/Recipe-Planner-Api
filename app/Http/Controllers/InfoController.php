<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * home page function to render welcome content
     *
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        $name = 'Current User';
        return view('home', compact('name'));
    }
}
