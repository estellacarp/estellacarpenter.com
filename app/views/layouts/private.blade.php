<!DOCTYPE html>
<html>
	<head>
		<title>Private @yield('title')</title>
		@yield('css')
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<link rel="stylesheet" href="style.css">
	</head>

	<body>
	@if(Session::has('message'))
	<div class ="alert alert-info alert-dismissable"> 
	 	<button type="button" class= "close" data-dismiss= "alert" aria-hidden="true">&times</button>
		<h4>{{ Session::get('message') }}</h4>
	</div>
	@endif
	
	<form action="{{ URL::to('logout') }}" method="post">
			<button type ="submit"> LOGOUT </button>
			</form>
		<div class = "container col-md-6 col-md-offset-1">
		
		<h4><a href="{{ URL::to('home') }}">HOME</a>
		<a href="{{ URL::to('create') }}">Create</a>
		<a href="{{ URL ::to('dashboard')}}">DASHBOARD</a>
		<a href="{{ URL::to('project') }}">PROJECT</a></h4>

		
		@yield('content')

		</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/ja/bootstrap.min.js"></script>
	
	</body>
</html> 