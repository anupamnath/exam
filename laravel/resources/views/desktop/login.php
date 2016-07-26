<html>
<head></head>
<body>
	<form action="/login" method="post">
		<input type="text" name="uid" placeholder="Student Id" value="<?php echo(Request::old('uid')); ?>">
		<input type="password" name="password" placeholder="Password">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<button type="submit">Login</button>
	</form>
</body>
</html>