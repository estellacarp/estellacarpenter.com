@extends('layouts.public')

@section('title') Projects @stop
@section('link') @stop


@section('content')

<h1>My Projects</h1>

	@foreach ($project as $projects)
	
		<div class = "row">
			<div class ="clo-sm-6 col-md-6">
				<div class ="thumbnail">
					<div class = "caption">
						<article>
							<a href="{{ url('dashboard/'.$projects->id) }}">
							@include('layouts/view')
							</a>
						</article>
					</div>						
				</div>	
			</div>
		</div>	
		
	@endforeach

{{Form::open(['url' => 'login'])}}
{{Form::Submit('Add Project')}}
{{Form::close()}}


@stop
