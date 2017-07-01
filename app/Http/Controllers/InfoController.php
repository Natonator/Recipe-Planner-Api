<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    /**
     * home page function to render welcome content
     *
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        $user = Auth::user();
        $name = 'Current User';
        return view('home', compact('name', 'user'));
    }


}
