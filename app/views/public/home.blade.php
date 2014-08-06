@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
		<h1>Estella Carpenter</h1>
		<h2>Welcome to my Portfolio</h2>
		<h2>Estellacarp@gmail.com</h2>
		<h2>(480)707-3730</h2>
		<div class="container-fluid">
		<div class="row">
		
		@if (isset($projects))
			@foreach ($projects as $project)
				<div class="col-md-4">
					<a href="{{ url('project/'.$project->id) }}">
					@include('layouts/view', ['projects'=>$project])
					<hr>
					</a>

			</div>
			@endforeach
		@else
			<p>No Projects</p>
		@endif
		</div>
		</div>
@stop
