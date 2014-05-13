@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
		<h1>Hello, {{ $name }}</h1>
		<a href="{{ URL::to('login') }}">Go to login page</a>
@stop
