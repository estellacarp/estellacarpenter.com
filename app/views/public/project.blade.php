@extends('layouts.public')

@section('title') Projects @stop
@section('link') @stop


@section('content')


{{Form::open(['url' => 'login'])}}
{{Form::Submit('Add Project')}}
{{Form::close()}}

<h1>This is My Projects</h1>

	@foreach ($project as $projects)
	
		<div class = "row">
			<div class ="clo-sm-6 col-md-6">
				<div class ="thumbnail">
					<div class = "caption">
						<h1>{{ link_to("dashboard/$projects->id", $projects->Title)}}</h1>
						<!-- {{$name = 'asset/' . $projects->Title .'.jpg'}} -->
						<img src="{{asset($name)}}" alt="{{ $projects->Title}}"/>
						<p>{{$projects->Description}}</p>
					</div>						
				</div>	
			</div>
		</div>	
		
	@endforeach


<!-- <table>
		<thead>
			<tr>
			<td>ID</td>
			<td>Title</td>
			<td></td>
			</tr>
		</thead>
		<tbody>
		<ul class ="list-group">
			@foreach ($project as $projects)
			<tr>
				<td width="50px">
					<li class = "list-group-item">
						{{ $projects->id}}
					</li>
				</td>
				<td width="150px">
					<li class = "list-group-item">
						{{ link_to("dashboard/$projects->id", $projects->Title)}}
					</li>
				</td>
				<td>
					<li class = "list-group-item">
						<img src="{{$projects->Image}}"alt = "{{$projects->Title}}">
					</li>
				</td>
			</tr>
			@endforeach
			</ul>
		</tbody>
	</table> -->
<br/>
<br/>
<!-- <img src="{{asset('asset/ClearSight.jpg')}}" alt="clear Sight
" height = "100px"> -->




@stop
