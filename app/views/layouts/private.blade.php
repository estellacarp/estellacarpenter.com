<!DOCTYPE html>
<html>
	<head>
		<title>Private @yield('title')</title>
		@yield('css')
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
	<form action="{{ URL::to('logout') }}" method="post">
			<button type ="submit"> LOGOUT </button>
			</form>
		<div class = "container col-md-6 col-md-offset-1">
		
		<a href="{{ URL::to('home') }}">HOME</a>
		<a href="{{ URL::to('create') }}">Create</a>
		<a href="{{ URL::to('editPage') }}">Edit</a>
		<a href="{{ URL ::to('dashboard')}}">DASHBOARD</a>
		<a href="{{ URL::to('project') }}">PROJECT</a>
		
		@yield('content')

		</div>
	</body>
</html> 