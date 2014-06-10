<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<head>
	@section('header-meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Shopping Cart">
	<meta name="viewport" content="width=device-width">
	@show

	@section('header-title')
	<title>Shopping_Cart</title>
	@show

	@section('header-styles')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" type="text/css">
	@show

	@section('header-scripts')
	<script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('vendor/angular/angular.js')}}"></script>	
	@show
</head>

<body>
	
	@yield('content')
	
	@section('footer-scripts')
	<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
	@show
</body>
</html>