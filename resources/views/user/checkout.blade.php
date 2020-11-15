@extends('layouts.app_user', ['page' => __('/user/checkout'), 'pageSlug' => 'checkout'])

@section('content')
    <div class="section1-checkout">
        <div class="container">
            <div class="left-div">
                <div class="row1">
                    <h1>Confirm & Pay</h1>
                    <p>{{$prod}} Items</p>
                </div>
                <div class="row2">

                    @foreach($products as $product)
                    <div class="product-wrapper">
                        <figure>
                            <img src="{{ asset('img/'.$product->avatar)}}"/>
                        </figure>
                        <div class="bottom-div">
                            <p>{{ $product->source }}</p>
                            <h4>{{ $product->name }}</h4>
                            <div class="more-detail">
                                <span class="form-shoe">"Flint"</span>
                                <div class="sale-tag">
                                    <img src="{!! asset('img/Path 75.png') !!}" />
                                    <span>${{ $product->deal }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="right-div">
                <div class="row1">
                    <div class="head">
                        <h4>Shipping Information</h4>
                        <figure>
                            <img id="shipping-btn" src="{{ asset('img/edit-btn.png')}}"/>
                        </figure>
                    </div>
                    <p>Hayden Carter</p>
                    <p>120 London Road, Sheifield, South Yorkshire, S118UH</p>
                    <p>3473943498728</p>
                </div>
                <div class="row2">
                    <div class="head">
                        <h4>Payment</h4>
                        <figure>
                            <img id="payment-btn" src="{{ asset('img/edit-btn.png')}}"/>
                        </figure>
                    </div>
                    <div class="card-details">
                        <p>1224 2345 8784 9837</p>
                        <p>12/21 123</p>
                    </div>
                    <p class="add-p">120 London Road, Sheifield, South Yorkshire, S118UH</p>
                </div>
                <div class="row-3">
                    <div class="sub-total">
                        <span>Subtotal:</span>
                        <span>$100</span>
                    </div>
                    <div class="taxes">
                        <span>Taxes:</span>
                        <span>Free</span>
                    </div>
                    <div class="total-price">
                        <span>Total Price:</span>
                        <span>$100</span>
                    </div>
                </div>
                <div class="row-4">
                    <button type="submit">Place Order</button>
                </div>
            </div>
        </div>
    </div>
@endsection
