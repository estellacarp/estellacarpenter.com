@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop
@section('content')
<h1> Project View</h1>



<article>
			@include('layouts/view')

</article>
<hr>
<a href="{{ URL ::previous() }}">Back</a>



@stop
@stop