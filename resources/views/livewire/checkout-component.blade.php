	<main id="main" class="main-site">
<style>
    .summary-item .row-in-form input[type=password], .summary-item .row-in-form input[type=text], .summary-item .row-in-form input[type=tel] {
    font-size: 13px;
    line-height: 19px;
    display: inline-block;
    height: 43px;
    padding: 2px 20px;
    max-width: 300px;
    width: 100%;
    border: 1px solid #e6e6e6;
}
</style>
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span> Checkout </span></li>
				</ul>
			</div>
			<div class=" main-content-area">
                <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-address-billing">
                                <h3 class="box-title">Billing Address</h3>
                                <div class="billing-address">
                                    <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input id="fname" type="text" class="form-control input-file" name="firstname" value="" placeholder="Your name" wire:model="firstname">
                                        @error('firstname')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input id="lname" type="text" class="form-control input-file" name="lastname" value="" placeholder="Your last name" wire:model="lastname">
                                        @error('lastname')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input id="email" type="email" class="form-control input-file" name="email" value="" placeholder="Type your email" wire:model="email">
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input id="phone" type="number" name="mobile" value="" placeholder="10 digits format" wire:model="mobile">
                                        @error('mobile')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add1">Address: (Line 1)</label>
                                        <input id="add1" type="text" name="line1" value="" placeholder="Street at apartment number" wire:model="line1">
                                        @error('line1')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add2">Address: (Line 2)</label>
                                        <input id="add2" type="text" name="line2" value="" placeholder="Street at apartment number" wire:model="line2">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">City<span>*</span></label>
                                        <input id="city" type="text" name="city" value="" placeholder="United States" wire:model="city">
                                        @error('city')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="province">Province<span>*</span></label>
                                        <input id="province" type="text" name="province" value="" placeholder="United States" wire:model="province">
                                        @error('province')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <input id="country" type="text" name="country" value="" placeholder="United States" wire:model="country">
                                        @error('country')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:</label>
                                        <input id="zip-code" type="number" name="zipcode" value="" placeholder="Your postal code" wire:model="zipcode">
                                        @error('zipcode')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form fill-wife">
                                        <label class="checkbox-field">
                                            <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                            <span>Ship to a different address?</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @if($ship_to_different)
                            <div class="col-md-12">
                                <div class="wrap-address-billing">
                                    <h3 class="box-title">Shipping Address</h3>
                                    <div class="billing-address">
                                        <p class="row-in-form">
                                            <label for="s_fname">first name<span>*</span></label>
                                            <input id="s_fname" type="text" name="s_firstname" value="" placeholder="Your name" wire:model="s_firstname">
                                            @error('s_firstname')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_lname">last name<span>*</span></label>
                                            <input id="s_lname" type="text" name="s_lastname" value="" placeholder="Your last name" wire:model="s_lastname">
                                            @error('s_lastname')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_email">Email Addreess:</label>
                                            <input id="s_email" type="email" name="s_email" value="" placeholder="Type your email" wire:model="s_email">
                                            @error('s_email')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_phone">Phone number<span>*</span></label>
                                            <input id="s_phone" type="number" name="s_mobile" value="" placeholder="10 digits format" wire:model="s_mobile">
                                            @error('s_mobile')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_add1">Address: (Line 1)</label>
                                            <input id="s_add1" type="text" name="s_line1" value="" placeholder="Street at apartment number" wire:model="s_line1">
                                            @error('s_line1')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_add2">Address: (Line 2)</label>
                                            <input id="s_add2" type="text" name="s_line2" value="" placeholder="Street at apartment number" wire:model="s_line2">
                                            @error('s_line2')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_city">City<span>*</span></label>
                                            <input id="s_city" type="text" name="s_city" value="" placeholder="United States" wire:model="s_city">
                                            @error('s_city')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_province">Province<span>*</span></label>
                                            <input id="s_province" type="text" name="s_province" value="" placeholder="United States" wire:model="s_province">
                                            @error('s_province')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_country">Country<span>*</span></label>
                                            <input id="s_country" type="text" name="s_country" value="" placeholder="United States" wire:model="s_country">
                                            @error('s_country')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="s_zip-code">Postcode / ZIP:</label>
                                            <input id="s_zip-code" type="number" name="s_zipcode" value="" placeholder="Your postal code" wire:model="s_zipcode">
                                            @error('s_zipcode')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="summary summary-checkout">
                        <div class="summary-item payment-method">
                            <h4 class="title-box">Payment Method</h4>
                            @if($paymentmode=='card')
                            <div class="wrap-address-billing">
                                @if(Session::has('stripe_error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session::get('stripe_error')}}
                                    </div>
                                @endif
                                <p class="row-in-form">
                                    <label for="card-no">Card Number:<span>*</span></label>
                                    <input id="card-no" type="text" name="card-no" value="" placeholder="Card Number" wire:model="card_no">
                                    @error('card_no')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="exp-month">Expiry Month:<span>*</span></label>
                                    <input id="exp-month" type="text" name="exp-month" value="" placeholder="MM" wire:model="exp_month">
                                    @error('exp_month')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="exp-year">Expiry Year:<span>*</span></label>
                                    <input id="exp-year" type="text" name="exp-year" value="" placeholder="YYYY" wire:model="exp_year">
                                    @error('exp_year')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="cvc">CVC:<span>*</span></label>
                                    <input id="cvc" type="password" name="cvc" value="" placeholder="***" wire:model="cvc">
                                    @error('cvc')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                            </div>
                            @endif
                            <div class="choose-payment-methods">
                                <label class="payment-method">
                                    <input name="payment-method"  value="cod" type="radio" wire:model="paymentmode">
                                    <span>Cash On Delivery</span>
                                    <span class="payment-desc">Order now pay on Delivery</span>
                                </label>
                                <label class="payment-method">
                                    <input name="payment-method"  value="card" type="radio" wire:model="paymentmode">
                                    <span>Debit / Credit Card</span>
                                </label>
                                <label class="payment-method">
                                    <input name="payment-method"  value="paypal" type="radio" wire:model="paymentmode">
                                    <span>Paypal</span>
                                    <span class="payment-desc">You can pay with your credit</span>
                                    <span class="payment-desc">card if you don't have a paypal account</span>
                                </label>
                                @error('paymentmode')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            @if(Session::has('checkout'))
                                <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>
                            @endif
                            @if($errors->isEmpty())
                                <div wire:ignore id="processing" style="font-size:22px;margin-bottom:20px; padding-left:37px;color:green;display:none;">
                                    <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                    <span>Processing.....</span>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-medium">Place order now</button>
                        </div>
                        <div class="summary-item shipping-method">
                            <h4 class="title-box f-title">Shipping method</h4>
                            <p class="summary-info"><span class="title">Flat Rate</span></p>
                            <p class="summary-info"><span class="title">Fixed $0</span></p>
                        </div>
                    </div>
                </form>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
