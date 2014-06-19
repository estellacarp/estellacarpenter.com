@extends('layouts.private')

@section('title') Create New Project @stop
@section('css') 
@section('link') @stop
@section('content')

<H1>Hello this is the create a new project</H1>


{{Form::open(['url' => 'save','class'=>'form', 'files'=>true])}}
@include('layouts/formInput')
{{Form::Submit(' Save ', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

@include('layouts/formCancel')

@stop

