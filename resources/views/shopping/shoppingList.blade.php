@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <h1>Shopping List</h1>
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
        </div>
    </div><!-- container -->
@endsection
