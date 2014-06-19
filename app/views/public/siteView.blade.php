@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop
@section('content')
<h1> Project View</h1>


<h1>{{$projects->Title}}</h1>
<article>
			{{$projects->Description}}
</article>
<br/>
{{ link_to('dashboard', 'To Dashboard')}}
<br/>
{{ link_to('project', 'To Project')}}

@stop
@stop