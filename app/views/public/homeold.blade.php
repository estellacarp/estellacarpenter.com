@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
		<h1>Estella Carpenter</h1>
		<h2>Welcome to my Portfolio</h2>
	@if (isset($projects && count($projects) > 0) )
		@foreach ($projects as $p)
				
			@endforeach
	@else
		<p>No Projects</p>
	@endif
		<a href="{{ URL::to('login') }}">LOGIN</a>
	@stop
@stop
