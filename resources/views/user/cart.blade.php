@extends('layouts.app_user', ['page' => __('/user/cart'), 'pageSlug' => 'cart'])

@section('content')
    <div class="section1-cart">
        <div class="container">
            <div class="row1">
                <h1>Cart</h1>
            </div>


            @foreach($products as $product)
            <div class="row2">
                <div class="col1">
                    <figure class="box-1">
                        <img src="{!! asset('images/'.$product->avatar ) !!}" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">{{ $product->source }}</p>
                        <h5>{{ $product->name }}</h5>
                    </div>
                    <div class="sale-tag">
                        <img src="{!! asset('img/Path 75.png') !!}" />
                        <span>${{ $product->deal }}</span>
                    </div>
                </div>
                <div class="col2">
                    <div class="span1">
                        <p class="p-1">AVAILABILITY</p>
                        <p class="p-2">IN STOCK</p>
                    </div>
                    <div class="span2">
                        <p class="p-1">RELEASE DATE</p>
                        <p class="p-2">{{ $product->release_date }}</p>
                    </div>
                    <div class="span3">
                        <p class="p-1">RETAIL</p>
                        <p class="p-2">${{ $product->retail_price }}</p>
                    </div>
                </div>
                <div class="col3">
                    <button id="delete-order-btn" class="minus-btn">
                        <span></span>
                    </button>
                </div>
            </div>
            @endforeach

            <div class="row3">
                <a href="{{ route('checkout') }}">GO TO CHECKOUT</button>
            </div>
        </div>
    </div>
@endsection
