@extends('layouts.private')

@section('title') dashbord @stop


@section('content')

<h1>The secret codes</h1>

<form action="{{ URL::to('logout') }}" method="post">
<button type ="submit"> LOGOUT </button>
</form>
@stop