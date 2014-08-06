


<div class ='form-group'>
{{Form::label('Title','Title:')}}
{{Form::text('Title', null, ['class' => 'form-control'])}}
{{$errors->first('Title')}}
</div>

<div class ='form-group'>
{{Form::label('Link','Link to site:')}}
{{Form::text('Link', null, ['class' => 'form-control'])}}
{{$errors->first('Link')}}
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
<<<<<<< HEAD
{{Form::label('ImageBig','Image Upload:')}}
{{Form::file('ImageBig' , null, ['class' => 'form-control'])}}
=======
<<<<<<< HEAD
{{Form::label('ImageBig','Image Upload:')}}
{{Form::file('ImageBig' , null, ['class' => 'form-control'])}}
=======
{{Form::label('Image','Image Upload:')}}
{{Form::file('Image' , null, ['class' => 'form-control'])}}
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0
</div>







