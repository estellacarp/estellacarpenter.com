@extends('layouts.private')

@section('title') Create New Project @stop


@section('content')
<H1>Hello this is the create a new project</H1>

{{Form::open(['url' => 'save'])}}
<div>
{{Form::label('Title','Title:')}}
{{Form::text('Title')}}
{{$errors->first('Title')}}
</div>

<div>
{{Form::label('Description','Description:')}}
{{Form::text('Description')}}
{{$errors->first('Description')}}
</div>

<div>
<img src=""/>
</div>
<div>
{{Form::Submit('save')}}

</div>
<div>
{{Form::Submit('Upload')}}

</div>
{{Form::close()}}

{{Form::open(['url' =>'cancel'])}}
{{Form::Submit('Cancel')}}
{{Form::close()}}
@stop

