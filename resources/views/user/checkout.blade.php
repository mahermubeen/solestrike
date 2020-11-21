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
            <form class="right-div deliver_orders_form" method="POST" action="{{ route('place_order') }}" autocomplete="off">
                @csrf
                
                <input class="hidden" id="total_price-inpt" type="number" value="{{$total}}" name="total_price" />

                <div class="row1">
                    <div class="head">
                        <h4>Shipping Information</h4>
                        <figure>
                            <img id="shipping-btn" data-id="{{ $user->id }}" src="{{ asset('img/edit-btn.png')}}"/>
                        </figure>
                    </div>
                    <p>{{ $user->full_name }}</p>
                    <p>{{ $user->address_1 }}, {{ $user->city }}, {{ $user->country }}</p>
                    <p>{{ $user->phone }}</p>
                </div>

                <div class="row2">
                    <div class="head">
                        <h4>Payment</h4>
                        <figure>
                            <img id="payment-btn" src="{{ asset('img/edit-btn.png')}}"/>
                        </figure>
                    </div>
                    <div class="card-details">
                        <p>{{ $user->card_number }}</p>
                        <p>{{ $user->month }}/{{ $user->year }}  {{ $user->cvv }}</p>
                    </div>
                    <p class="add-p">{{ $user->address_1 }}, {{ $user->city }}, {{ $user->country }}</p>
                </div>

                <div class="row-3">

                    @foreach($products as $prods)
                        <div class="sub-total">
                            <span>{{ $prods->name }}:</span>
                            <span>${{ $prods->retail_price }}</span>
                        </div>
                    @endforeach

                    <div class="sub-total1">
                        <span>Subtotal:</span>
                        <span>${{ $subtotal }}</span>
                    </div>

                    <div class="taxes">
                        <span>Taxes:</span>
                        <span>2% per item</span>
                    </div>
                    <div class="total-price">
                        <span>Total Price:</span>
                        <span>${{ $total }}</span>
                    </div>
                </div>

                <div class="row-4">
                    <button type="submit">Place Order</button>
                </div>

            </form>
        </div>
    </div>
@endsection
