


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
{{Form::label('Image','Image Upload:')}}
{{Form::file('image' , null, ['class' => 'form-control'])}}
</div>

<!-- <div>
<img src="{{asset('asset/ClearSight.jpg')}}" alt="clear Sight
" height = "100px">
</div> -->
<div class ='form-group'>




