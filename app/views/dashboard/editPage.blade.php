@extends('layouts.private')

@section('title') Edit Project @stop


@section('content')

<H1>Hello this the edit page</H1>
{{Form::model($projects,['url' =>'update', 'files'=>true])}}

<div>
{{Form::label('id','ID:' )}}
{{Form::text('id')}}
{{$errors->first('id')}}
</div>

<div>
{{Form::label('Title','Title:')}}
{{Form::text('Title')}}
</div>

<div>
{{Form::label('Description','Description:')}}
{{Form::textarea('Description')}}
</div>

<div>
{{Form::label('Image','Image Upload:')}}
{{Form::file('image')}}
</div>


<div>
{{Form::Submit('Save Update')}}

</div>

{{Form::close()}}

<!--  -->

{{Form::open(['url' =>'cancel'])}}
{{Form::Submit('Cancel')}}
{{Form::close()}}
@stop