@extends('layouts.master')

@section('content')
<div class="container">
	<div class="well">
		<?php //to compute total amount.
			$sum = 0;
			if(isset($orderDetails['product1']))
				$sum = $sum + (int)$orderDetails['product1']; 
			if(isset($orderDetails['product2']))
				$sum = $sum + (int)$orderDetails['product2']; 
			if(isset($orderDetails['product3']))
				$sum = $sum + (int)$orderDetails['product3']; 
		 ?>
		Thank you {{ $orderDetails['firstname']." ".$orderDetails['lastname'] }} for your order! <br>
		Your total amount was: {{ $sum }}
	</div>
</div>
@stop