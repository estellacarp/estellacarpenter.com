<!DOCTYPE html>
<html>
	<body>
		<form action="{{ URL::to('login') }}" method="post">
			Password:<input type = 'password' name="password" />
			E-mail:<input type = 'Email' name="email" />
			<button type ="submit"> Login </button>
		</form>
	</body>
</html>
