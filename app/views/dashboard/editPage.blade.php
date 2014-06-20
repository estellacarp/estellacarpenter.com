@extends('layouts.private')

@section('title') Edit Project @stop


@section('content')

<H1>Hello this the edit page</H1>

{{Form::model($projects,['url' =>'update/'.$projects->id, 'files'=>true])}}
@include('layouts/formInput')
{{Form::Submit('Save Update', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

@include('layouts/formCancel')

@stop