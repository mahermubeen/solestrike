@extends('layouts.app_user', ['page' => __('/user/order'), 'pageSlug' => 'order'])

@section('content')
    <div class="section1-order">
        <div class="container">
            <div class="head-content">
                <div class="head-left">
                    <figure>
                        <img src="{!! asset('img/'.$product->avatar) !!}" />
                    </figure>
                </div>
                <div class="head-right">
                    <div class="up-box">
                        <div class="box-2">
                            <p class="p1">{{$product->source}}</p>
                            <div class="details-box">
                                <h5>{{$product->name}}</h5>
                                <div class="sale-tag">
                                    <img src="{!! asset('img/Path 750.png') !!}" />
                                    <span>${{$product->deal}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="box-3">
                            <div class="span1">
                                <p class="p-1">AVAILABILITY</p>
                                <p class="p-2">IN STOCK</p>
                            </div>
                            <div class="span2">
                                <p class="p-1">RELEASE DATE</p>
                                <p class="p-2">{{$product->release_date}}</p>
                            </div>
                            <div class="span3">
                                <p class="p-1">RETAIL</p>
                                <p class="p-2">${{$product->retail_price}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="drop-wrapper">
                        <select class="size-select">
                            <option>Size 15</option>
                            <option>Size 14</option>
                            <option>Size 11</option>
                            <option>Size 9</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section2-order">
        <div class="container">
            <div class="left-div">
                <div class="sec1">
                    <p class="p1">PLEASE READ: There is a chance that you could get multiple shoes. There is also a
                        chance that the shoe could be ordered in the wrong size. All Sales are FINAL. You can not
                        Cancel an order. By purchasing this slot the Customer AGREES to these Policies and will be
                        charged for the slot.</p>
                    <p class="h-1">VERY IMPORTANT:</p>
                    <p class="p1">MULTIPLE SLOTS MAY BE PURCHASED BUT YOU MUST PROVIDE DIFFERENT: NAME | PHONE |
                        ADDRESS | PAYMENT METHOD | EMAIL FOR EACH SLOT SUBMITTED.</p>
                    <p class="p1">Please double/triple check the information you’ll provide to us, it’ll be the
                        information used on the day of release to cart and successfully submit your order.</p>
                    <p class="p1">THE SHIPPING ADDRESS MUST ALSO BE THE BILLING ADDRESS. THE BILLING ADDRESS & ZIP
                        CODE ON THE CARD MUST MATCH THE INFO PROVIDED TO US!</p>
                    <p class="h-1">*IMPORTANT*</p>
                    <p class="p1">Our fee does not include the cost of the product(s). The day you place the
                        order(s) it will reserve a slot for the day of release. From the day you place the order to
                        the day we successfully secure your order, there will only be a hold on placed your credit
                        card. Our service fee will only be charged on the day of release if we successfully secure
                        your order.</p>
                </div>

                <div class="sec2">
                    <div class="top-div">
                        <div class="left">
                            <p>STYLE</p>
                            <p>COLORWAY</p>
                            <p>RETAIL PRICE</p>
                            <p>RELEASE DATE</p>
                        </div>
                        <div class="right">
                            <p>CP9654</p>
                            <p>WHITE/CORE BLACK/RED</p>
                            <p>$220</p>
                            <p>02/25/2017</p>
                        </div>
                    </div>
                    <div class="down-div">
                        <figure>
                            <img src="{!! asset('img/Group 229.png') !!}" />
                        </figure>
                        <div class="rate-wrapper">
                            <div class="left">
                                <p class="num">$255</p>
                                <p class="green">Lowest Ask</p>
                            </div>
                            <div class="right">
                                <p class="num">$246</p>
                                <p class="red">Highest Ask</p>
                            </div>
                        </div>
                    </div>
                </div>

                <figure class="stock-img">
                    <img src="{!! asset('img/Group 103.png') !!}" />
                </figure>
            </div>
            <div class="right-div">
                <form class="order-form">
                    <div class="sec-1">
                        <h3>Shipping & Billing</h3>
                        <p>The billing information you provide below must match the exact billing information on
                            your credit card or your order will fail.</p>
                        <div class="shipping-form">
                            <input class="email-inpt" type="text" name="email" placeholder="Notification Email" />
                            <div class="full-name">
                                <input class="fname-inpt" type="text" name="f-name" placeholder="First Name" />
                                <input class="lname-inpt" type="text" name="l-name" placeholder="Last Name" />
                            </div>
                            <input class="add1-inpt" type="text" name="Address1" placeholder="Address Line 1" />
                            <input class="add2-inpt" type="text" name="Address2" placeholder="Address Line 2" />
                            <div class="phone-city">
                                <input class="phone-inpt" type="text" name="phone" placeholder="Phone" />
                                <input class="city-inpt" type="text" name="city" placeholder="City" />
                            </div>
                            <div class="state-cntry">
                                <select class="state-select">
                                    <option>State</option>
                                    <option>Pindi</option>
                                    <option>Islamabad</option>
                                    <option>Gujranwala</option>
                                </select>
                                <select class="country-select">
                                    <option>Country</option>
                                    <option>Pakistan</option>
                                    <option>Dubai</option>
                                    <option>America</option>
                                </select>
                            </div>
                            <div class="zip-wrapper">
                                <input class="zip-inpt" type="text" name="zip" placeholder="ZIP" />
                            </div>
                        </div>
                    </div>

                    <div class="sec-2">
                        <h3>Payment</h3>
                        <div class="payment-form">
                            <select class="cardType-select">
                                <option>Card Type</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                            <input class="cardNo-inpt" type="text" name="card-no" placeholder="Card Number (No Spaces)" />
                            <div class="month-year">
                                <select class="month-select">
                                    <option>Month</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>
                                <select class="year-select">
                                    <option>Year</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>
                            </div>
                            <div class="cvv-wrapper">
                                <input class="cvv-inpt" type="text" name="cvv" placeholder="CVV" />

                            </div>
                        </div>
                    </div>

                    <div class="submit-btns">
                        <a class="link-btn" href="#">
                            <img src="{!! asset('img/Path 76.png') !!}" />
                            <span>@YourTwitter</span>
                        </a>
                        <a class="sub-btn" href="#">Submit</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
