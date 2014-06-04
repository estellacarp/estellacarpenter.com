<!DOCTYPE html>
<html>
	<head>
		<title>Public Page @yield('title') </title>
		@yield('css')
	</head>
	<body>
		<a href="{{ URL::to('login') }}">LOGIN</a>
		<a href="{{ URL::to('project') }}">PROJECT</a>
		<a href="{{ URL ::to('home')}}">HOME</a>
		@yield('content')

	</body>
</html>