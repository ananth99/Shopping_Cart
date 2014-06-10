@extends('layouts.master')

@section('content')

{{ $errors->first('firstname')."<br>"}}
{{ $errors->first('lastname'."<br>")}}
{{ $errors->first('cardnumber'."<br>") }}
{{ $errors->first('cvv')."<br>" }}

<div class="container">
	<h3>Shopping Cart</h3>
	<div class="well">
		{{ Form::open(array('url'=>'shopping/checkout','class'=>'form-horizontal','id'=>'checkoutForm')) }}
		<div class="form-group">
			{{ Form::label('firstname','First Name',array('class'=>'col-sm-2 control-label')) }}
			<div class="col-sm-4">
				{{ Form::text('firstname','',array('class'=>'form-control')) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('lastname','Last Name',array('class'=>'col-sm-2 control-label')) }}
			<div class="col-sm-4">
				{{ Form::text('lastname','',array('class'=>'form-control')) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('address','Address',array('class'=>'col-sm-2 control-label')) }}
			<div class="col-sm-4">
				{{ Form::textarea('address','',array('class'=>'form-control','rows'=>3)) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('cardnumber','Card Number',array('class'=>'col-sm-2 control-label')) }}
			<div class="col-sm-4">
				{{ Form::text('cardnumber','',array('class'=>'form-control')) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('cvv','CVV',array('class'=>'col-sm-2 control-label')) }}
			<div class="col-sm-4">
				{{ Form::text('cvv','',array('class'=>'form-control')) }}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::checkbox('product1',99,false,array('class'=>'products')) }} <label><strong>Product 1:&nbsp; $99</strong> </label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::checkbox('product2',89,false,array('class'=>'products')) }} <label><strong>Product 2:&nbsp; $89</strong> </label>	
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">	
				{{ Form::checkbox('product3',59,false,array('class'=>'products')) }} <label><strong>Product 3:&nbsp; $59</strong> </label>	
			</div>
		</div>

		<div id="selectedProducts" class="col-sm-offset-2 col-sm-10">
			<strong><em>Total Cost:</em></strong> <div id="amount">0</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Checkout',array('class'=>'btn btn-default','id'=>'checkout')) }}
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>
@stop