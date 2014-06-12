@extends('layouts.private')

@section('title') Create New Project @stop


@section('content')

<H1>Hello this the edit page</H1>
{{Form::open(['url' => 'Save'])}}
<div>
{{Form::label('Title','Title:')}}
{{Form::text('Title')}}
</div>

<div>
{{Form::label('Description','Descrition:')}}
{{Form::text('Description')}}
</div>
<div>
<img src=""/>
</div>
<div>
{{Form::Submit('Save')}}

</div>
{{Form::close()}}

{{Form::open(['url' =>'cancel'])}}
{{Form::Submit('Cancel')}}
{{Form::close()}}
@stop