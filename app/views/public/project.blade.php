@extends('layouts.public')

@section('title') Projects @stop
@section('link') @stop


@section('content')

<h1>My Projects</h1>

	
		<div class = "row">
			<div class ="clo-sm-6 col-md-6">
				<div class ="thumbnail">
					<div class = "caption">
						<article>
							
							@include('layouts/view', ['project'=>$project])
						
						</article>
					</div>						
				</div>	
			</div>
		</div>	
		


@stop
