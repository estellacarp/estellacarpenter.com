@extends('layouts.private')

@section('title') dashbord @stop


@section('content')

<h1>Dashboard</h1>
<h1>My Projects</h1>
	<table>
		<thead>
			<tr>
			<td>ID</td>
			<td>Title</td>
			<td></td>
			<td>Edit</td>
			<td>Delete</td>
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
						<!-- {{$name = 'asset/' . $projects->Title .'.jpg'}} -->
					<img src="{{asset($name)}}" alt="{{ $projects->Title}}">
					</li>
				</td>
				<td width="50px">
					<li class = "list-group-item">
						{{ link_to("editPage/$projects->id", 'Edit')}}
					</li>
				</td>
				<td>
					<li class = "list-group-item">
						{{ link_to("deleteRow/$projects->id", 'Delete')}}
					</li>
				</td>
			</tr>
			@endforeach
			</ul>
		</tbody>
	</table>




@stop