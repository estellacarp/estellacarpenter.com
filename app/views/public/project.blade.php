@extends('layouts.public')

@section('title') Projects @stop


@section('content')
<h1>This is My Projects</h1>
{{Form::open(['url' => 'login'])}}
{{Form::Submit('Add Project')}}
{{Form::close()}}
<img src="public\img\ClearSight.jpg">
<h1>This is my first project</h1>
<p>This is a discrpion of the project</p>



@stop
