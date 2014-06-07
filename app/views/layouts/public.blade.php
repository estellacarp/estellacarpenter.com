<!DOCTYPE html>
<html>
	<head>
		<title>Public Page @yield('title') </title>
		@yield('css')
	</head>
	<body>
		<a href="{{ URL ::to('home')}}">HOME</a>
		<a href="{{ URL::to('project') }}">PROJECT</a>
		
		@yield('content')

	</body>
</html>