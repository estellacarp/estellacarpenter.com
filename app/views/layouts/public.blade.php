<!DOCTYPE html>
<html>
	<head>
		<title>Public Page @yield('title') </title>
		@yield('css')
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('style.css')}}">
	</head>
	<body>
		<div class = "container col-md-8 col-md-offset-1">
		<h4><a href="{{ URL::to('home')}}">HOME</a>
		</h4>
		
		@yield('content')
		</div>

	</body>
</html>