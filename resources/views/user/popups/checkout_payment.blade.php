<div id="payment-box" class="checkout_payment_popup hidden">
    <div class="payment-wrapper">
        <div class="head">
            <h4>Payment</h4>
            <div class="cross" id="payment-cancel-btn">
                <div class="box">
                    <span class="line1"></span>
                    <span class="line2"></span>
                </div>
                
            </div>
        </div>

        <form class="payment-form">
            <div class="card-name-inpt">
                <label>Name on Card</label>
                <input type="text" name="name" value="" />
            </div>

            <div class="expiry-cvv-inpts">
                <div class="expiry-inpt">
                    <label>Expiry</label>
                    <input type="text" name="expiry_date" value="" />
                </div>

                <div class="cvv-inpt">
                    <label>CVV</label>
                    <input type="text" name="cvv" value="" />
                </div>
            </div>

            <div class="billing-wrapper">
                <span class="bill-span">Billing</span>
                <div class="checkbox-inpt">
                    <input id="billing" class="hidden" type="checkbox" name="same_billing" />
                    <div for="billing" class="img-wrapper">
                        <img class="hidden" src="{{ asset('img/check-tick.png') }}"/>
                    </div>
                </div>
                <span class="inpt-side">Same as Shipping</span>
            </div>

            <div class="inputs-wrapper">
                <div class="address-zip-inpts">
                    <div class="address-inpt">
                        <label>Address Line 1</label>
                        <input type="text" name="address" value="" />
                    </div>
    
                    <div class="zip-inpt">
                        <label>ZIP Code</label>
                        <input type="text" name="zip" value="" />
                    </div>
                </div>

                <div class="city-state-inpts">
                    <div class="city-inpt">
                        <label>City</label>
                        <input type="text" name="city" value="" />
                    </div>
    
                    <div class="state-inpt">
                        <label>State</label>
                        <input type="text" name="state" value="" />
                    </div>
                </div>
            </div>

            <div class="last-row">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</div>