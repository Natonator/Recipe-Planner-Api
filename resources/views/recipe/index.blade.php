@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Recipes</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <input type="text" name="search" placeholder="Search">
                        <select class="" name="">
                            <option>Select Type</option>
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                            <option>Five</option>
                        </select>
                        <a href="#" class="btn btn-primary">Filter by Price</a>

                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>One</li>
                            <li>Two</li>
                            <li>Three</li>
                            <li>Four</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- container -->
@endsection
