@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
		<h1>Estella Carpenter</h1>
		<h2>Welcome to my Portfolio</h2>
		<h1>Hello, {{ $name }}</h1>
	
@stop
