@extends('layouts.private')

@section('title') Create New Project @stop


@section('content')
<H1>Hello this is the create a new project</H1>

{{Form::open(['url' => 'save', 'files'=>true])}}
<div>
{{Form::label('Title','Title:')}}
{{Form::text('Title')}}
{{$errors->first('Title')}}
</div>

<div>
{{Form::label('Description','Description:')}}
{{Form::textarea('Description')}}
{{$errors->first('Description')}}
</div>

<div>
{{Form::label('Image','Image Upload:')}}
{{Form::file('image')}}
</div>

<!-- <div>
<img src="{{asset('asset/ClearSight.jpg')}}" alt="clear Sight
" height = "100px">
</div> -->
<div>
{{Form::Submit('save')}}

</div>

{{Form::close()}}

<!--  -->

{{Form::open(['url' =>'cancel'])}}
{{Form::Submit('Cancel')}}
{{Form::close()}}
@stop

