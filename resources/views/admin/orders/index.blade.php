@extends('layouts.app_admin', ['page' => __('Orders Index'), 'pageSlug' => 'orders'])

@section('content')
    <div class="row">
     @include('alerts.success')
        @include('alerts.danger_alert')
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Orders</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#" class="btn btn-sm btn-primary">Add order</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Delivery</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($orders as $key => $order)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $order->full_name }}</td>
                                    <td>{{ $order->address_1 }}, {{ $order->city }}, {{ $order->country }}</td>
                                    <td>${{ $order->total_price }}</td>
                                    <td>

                                        <div class="switches">
                                            <li>
                                                <input id="{{ $key }}" data-id="{{ $order->id }}" class="hidden active-btn toggle-class"
                                            name="status" type="checkbox" {{ $order->status ? 'checked' : '' }}>
                                                <label for="{{ $key }}">
                                                  <span class="cursor-pointer"></span>
                                                </label>
                                              </li>
                                        </div>

                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <span id="delete-order-btn" data-id="{{ $order->id }}" class="delete-order-btn dropdown-item">Delete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
