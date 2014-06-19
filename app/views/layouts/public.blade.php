<!DOCTYPE html>
<html>
	<head>
		<title>Public Page @yield('title') </title>
		@yield('css')
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class = "container col-md-6 col-md-offset-1">
		<a href="{{ URL ::to('home')}}">HOME</a>
		<a href="{{ URL::to('project') }}">PROJECT</a>
		
		@yield('content')

	</body>
</html>