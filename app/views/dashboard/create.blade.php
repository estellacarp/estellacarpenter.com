@extends('layouts.private')

@section('title') Create New Project @stop

@section('content')

<H1>Hello this is the create a new project</H1>
<!-- 
@if (isset($errors))
<pre>
{{ print_r($errors) }}
</pre>
@endif -->



{{Form::open(['url' => 'save','class'=>'form', 'files'=>true])}}
@include('layouts.formInput')
{{Form::Submit(' Save ', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

@include('layouts.formCancel')

@stop
