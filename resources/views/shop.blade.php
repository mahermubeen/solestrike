@extends('layouts.app_org', ['page' => __('/user/shop'), 'pageSlug' => 'shop'])

@section('content')
    <div class="section1-shop">
        <div class="container">
            <div class="head-content">
                <div class="head-left">
                    <h4>Shop</h4>
                    <p>Check out the featured releases below or narrow down your search by using the dropdown filter
                        on the right.</p>
                </div>
                <div class="head-right">
                    <select class="alternate-select">
                        <option>Adidas Alternate</option>
                        <option>Nike</option>
                        <option>Porche</option>
                        <option>Outfitters</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="section2-shop">
        <div class="container">
            @foreach ($products as $key => $product)
            <div value="{{ $key }}" class="product-wrapper">
                <a href="{{ route('order_product', ['id' => $product->id]) }}" class="box-1">
                    <img src="../img/{{ $product->avatar }}" />
                </a>
                <div class="box-2">
                    <p class="p1">{{ $product->source }}</p>
                    <div class="details-box">
                        <h5>{{ $product->name }}</h5>
                        <div class="sale-tag">
                            <img src="../img/Path 75.png" />
                            <span>${{ $product->deal }}</span>
                        </div>
                    </div>
                    <p class="p2">{{ $product->detail }}</p>
                </div>
                <div class="box-3">
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

            </div>
            @endforeach
        </div>
    </div>

@endsection
