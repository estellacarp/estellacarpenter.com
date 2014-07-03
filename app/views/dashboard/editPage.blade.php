@extends('layouts.private')

@section('title') Edit Project @stop


@section('content')


<H1>Hello this to edit a project</H1>

@include('layouts/view')

{{Form::model($projects,['url' =>'update/'.$projects->id, 'files'=>true])}}
@include('layouts/formInput')
{{Form::Submit('Save Update', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

@include('layouts/formCancel')

@stop