@extends('layouts.app')
@section('content')
<div class="container " style="max-width:600px;  ">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->



<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" >Payment Details</h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>
</div>                    
</div>
<div class="panel-body">
<form role="form" id="payment-form" method="post" action="/payment">
	@csrf
	@method('POST')
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input type="tel" class="form-control" name="visa_number" placeholder="Valid Card Number" autocomplete="cc-number"required autofocus 
/>
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group">
<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
<input 
type="date" 
class="form-control" 
name="visa_expiration"
placeholder="MM / YY"
autocomplete="cc-exp"
required 
/>
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">CV CODE</label>
<input 
type="number" 
class="form-control"
name="visa_code"
placeholder="CVC"
autocomplete="cc-csc"
required
/>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="couponCode">Country</label>
<input type="text" class="form-control" name="country" />
</div>
</div>                        
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="form-group">
				<label for="couponCode">City</label>
				<input type="text" class="form-control" name="city" />
			</div>
	</div>                        
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="form-group">
				<label for="couponCode">Address</label>
				<input type="text" class="form-control" name="address" />
			</div>
	</div>                        
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="form-group">
				<label for="couponCode">Postal Code</label>
				<input type="text" class="form-control" name="postal_code" />
			</div>
	</div>                        
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="form-group">
				<label for="couponCode">Phone</label>
				<input type="text" class="form-control" name="phone" />
			</div>
	</div>                        
</div>
<div class="row">
<div class="col-xs-12">
<button class="btn btn-success btn-lg btn-block" type="submit">Reserve Now</button>
</div>
</div>
<div class="row" style="display:none;">
<div class="col-xs-12">
<p class="payment-errors"></p>
</div>
</div>
</form>
</div>
</div>            
<!-- CREDIT CARD FORM ENDS HERE -->


</div>            



</div>
</div>

	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	
</body>
@endsection