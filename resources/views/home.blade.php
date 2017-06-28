@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1>{{$name}}'s Menu</h1>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3 col-xs-3">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <span>{{ Carbon\Carbon::now()->format('m-d-Y') }}</span>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Mega Tacos</a></li>
                                        <li><a href="#">Peach Salsa</a></li>
                                        <li><a href="#">Limeade</a></li>

                                    </ul>
                                </div>
                            </div><!-- panel panel-success -->
                        </div><!-- col-sm-3 -->
                        <div class="col-sm-3 col-xs-3">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <span>{{ Carbon\Carbon::tomorrow()->format('m-d-Y') }}</span>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Honey Glazed Salmon</a></li>
                                        <li><a href="#">Steamed Vegetables</a></li>
                                    </ul>
                                </div>
                            </div><!-- panel panel-success -->
                        </div><!-- col-sm-3 -->
                        <div class="col-sm-3 col-xs-3">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <span>{{ Carbon\Carbon::now()->addDays(2)->format('m-d-Y') }}</span>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Hasperat</a></li>
                                        <li><a href="#">Plomeek Soup</a></li>
                                    </ul>
                                </div>
                            </div><!-- panel panel-success -->
                        </div><!-- col-sm-3 -->
                        <div class="col-sm-3 col-xs-3">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <span>{{ Carbon\Carbon::now()->addDays(3)->format('m-d-Y') }}</span>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Chicken Stir Fry</a></li>
                                        <li><a href="#">Avacado Spring Rolls</a></li>
                                    </ul>
                                </div>
                            </div><!-- panel panel-success -->
                        </div><!-- col-sm-3 -->
                    </div><!-- row -->
                </div><!-- panel-body -->
            </div><!-- panel panel-default -->
        </div><!-- col-md-12 -->
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>Shopping List</h2>
                </div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Minimum Quantity</th>
                            <th>Avg Price</th>
                        </tr>
                        <tr>
                            <td>
                              <input type="checkbox" value="0">
                            </td>
                            <td>
                                Tilapia Fillet
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                ...
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="checkbox" value="0">
                            </td>
                            <td>
                                Tortillas
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                ...
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="checkbox" value="0">
                            </td>
                            <td>
                                Cilantro
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                ...
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="checkbox" value="0">
                            </td>
                            <td>
                                Mixed Vegetables Bag
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                ...
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <input type="checkbox" value="0">
                            </td>
                            <td>
                                Salmon Fillets
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                ...
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3>Featured Recipe</h3>
              </div>

              <div class="panel-body">

              </div><!-- panel-body -->

            </div><!-- panel panel-danger -->
        </div><!-- col-md-12 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
