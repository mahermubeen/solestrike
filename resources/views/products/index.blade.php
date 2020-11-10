@extends('layouts.app', ['page' => __('product index'), 'pageSlug' => 'products'])

@section('content')
    <div class="row">
        @include('alerts.success')
        @include('alerts.danger_alert')
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Products</h4>
                        </div>
                        <div class="col-4 text-right">
                            <button id="add-product" class="btn btn-sm btn-primary">Add product</button>
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
                                    <th scope="col">quantity</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Realease Date</th>
                                    <th scope="col">Source</th>
                                    <th scope="col">Deal</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>${{ $product->retail_price }}</td>
                                    <td>{{ $product->release_date }}</td>
                                    <td>{{ $product->source }}</td>
                                    <td>${{ $product->deal }}</td>
                                    <td>
                                        <img src="{{ asset('images/'.$product['avatar']) }}" width="75" alt="{{ $product->name }}" class="product-img"/>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a id="edit-btn" data-id="{{ $product->id }}" class="edit-btn dropdown-item">Edit</a>
                                                <a id="delete-btn" data-id="{{ $product->id }}" class="delete-btn dropdown-item">Delete</a>
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
