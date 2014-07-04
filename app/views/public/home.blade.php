@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
		<h1>Estella Carpenter</h1>
		<h2>Welcome to my Portfolio</h2>
		<div class="row">
			
		
		@if (isset($projects))
			@foreach ($projects as $project)
				<div class="col-md-4">
					<a href="{{ url('project/'.$project->id) }}">
					@include('layouts/view', ['project'=>$project])
							
						
						<hr>
					</a>

			</div>
			@endforeach
		@else
			<p>No Projects</p>
		@endif
		</div>
@stop
