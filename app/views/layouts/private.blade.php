<!DOCTYPE html>
<html>
	<head>
		<title>Private</title>
	</head>
	<body>
	<a href="{{ URL::to('home') }}">HOME</a>
	<a href="{{ URL::to('create') }}">Create</a>
	<a href="{{ URL::to('editPage') }}">Edit</a>
	<form action="{{ URL::to('logout') }}" method="post">
		<button type ="submit"> LOGOUT </button>
		</form>
	<a href="{{ URL ::to('dashboard')}}">DASHBOARD</a>
	<a href="{{ URL::to('project') }}">PROJECT</a>
	
	

		@yield('content')

	</body>
</html> 