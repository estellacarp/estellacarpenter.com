@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
		<h1>Estella Carpenter</h1>
		<h2>Welcome to my Portfolio</h2>
		@if (isset($project))
			@foreach ($project as $projects)
				<article>
					<a href="{{ url('dashboard/'.$projects->id) }}">
						@include('layouts/view')
						<hr>
					</a>		
				</article>
			@endforeach
		@else
			<p>No Projects</p>
		@endif
		
@stop
