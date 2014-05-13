<!DOCTYPE html>
<html>
	<body>
		<form action="{{ URL::to('login') }}" method="post">
			Password:<input type = 'password'/>
			E-mail:<input type = 'Email'/>
			<button type ="submit"> Login </button>
		</form>
	</body>
</html>
