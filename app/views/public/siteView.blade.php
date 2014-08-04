@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop
@section('content')
<h1> Project View</h1>

<article>
		<h1>{{$projects->Title}}</h1>
		<!-- {{$nameBig = 'asset/image/'.$projects->ImageBig }} -->
		<img src="{{asset($nameBig)}}" alt="{{ $projects->Title}}">
		<br/>
		<a href="{{ ("http://$projects->Link") }}">{{$projects->Link}}</a>
		<br/>
		{{$projects->Description}}
		<br/>
		{{$projects->Lang}}
</article>
<hr>
<a href="{{ URL ::previous() }}">Back</a>


@stop
@stop