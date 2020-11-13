@extends('layouts.app_org', ['page' => __('/user/cart'), 'pageSlug' => 'cart'])

@section('content')
    <div class="section1-cart">
        <div class="container">
            <div class="row1">
                <h1>Cart</h1>
            </div>
            <div class="row2">
                <div class="col1">
                    <figure class="box-1">
                        <img src="{!! asset('img/Group 76.png') !!}" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <h5>Air Jordan 13 Retro</h5>
                    </div>
                    <div class="sale-tag">
                        <img src="{!! asset('img/Path 75.png') !!}" />
                        <span>$40</span>
                    </div>
                </div>
                <div class="col2">
                    <div class="span1">
                        <p class="p-1">AVAILABILITY</p>
                        <p class="p-2">IN STOCK</p>
                    </div>
                    <div class="span2">
                        <p class="p-1">RELEASE DATE</p>
                        <p class="p-2">04.18.2020</p>
                    </div>
                    <div class="span3">
                        <p class="p-1">RETAIL</p>
                        <p class="p-2">$200</p>
                    </div>
                </div>
                <div class="col3">
                    <button class="minus-btn">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="row2">
                <div class="col1">
                    <figure class="box-1">
                        <img src="{!! asset('img/Group 76.png') !!}" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <h5>Air Jordan 13 Retro</h5>
                    </div>
                    <div class="sale-tag">
                        <img src="{!! asset('img/Path 75.png') !!}" />
                        <span>$40</span>
                    </div>
                </div>
                <div class="col2">
                    <div class="span1">
                        <p class="p-1">AVAILABILITY</p>
                        <p class="p-2">IN STOCK</p>
                    </div>
                    <div class="span2">
                        <p class="p-1">RELEASE DATE</p>
                        <p class="p-2">04.18.2020</p>
                    </div>
                    <div class="span3">
                        <p class="p-1">RETAIL</p>
                        <p class="p-2">$200</p>
                    </div>
                </div>
                <div class="col3">
                    <button class="minus-btn">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="row3">
                <button>GO TO CHECKOUT</button>
            </div>
        </div>
    </div>
@endsection
