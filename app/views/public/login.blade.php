@extends('layouts.public')

@section('title') Login @stop


@section('content')
		<form action="{{ URL::to('login') }}" method="post">
			Password:<input type = 'password' name="password" />
			E-mail:<input type = 'Email' name="email" />
			<button type ="submit"> Login </button>
		</form>
		
	
@stop
