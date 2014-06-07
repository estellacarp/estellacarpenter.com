<!DOCTYPE html>
<html>
	<head>
		<title>Private</title>
	</head>
	<body>
	<a href="{{ URL ::to('dashboard')}}">DASHBOARD</a>
	<a href="{{ URL::to('project') }}">PROJECT</a>
	<a href="{{ URL::to('CreateNewProject') }}">NewPage</a>
	<a href="{{ URL::to('home') }}">HOME</a>

		@yield('content')

	</body>
</html> 