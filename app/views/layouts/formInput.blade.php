


<div class ='form-group'>
{{Form::label('Title','Title:')}}
{{Form::text('Title', null, ['class' => 'form-control'])}}
{{$errors->first('Title')}}
</div>

<div class ='form-group'>
{{Form::label('Description','Description:')}}
{{Form::textarea('Description' , null, ['class' => 'form-control'])}}
{{$errors->first('Description')}}
</div>

<div class ='form-group'>
{{Form::label('Lang','Languages and tools:')}}
{{Form::textarea('Lang' , null, ['class' => 'form-control'])}}
{{$errors->first('Lang')}}
</div>

<div class ='form-group'>
{{Form::label('Image','Image Upload:')}}
{{Form::file('image' , null, ['class' => 'form-control'])}}
</div>







