<?php
	//Zone 1
	
?>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<form action="" method="post">
			<label>
				Username:
				<input name="user" type="text">
			</label><br>
			<label>
				Password:
				<input name="pass" type="password">
			</label><br>
			<label>
				<input name="remember" value="rem" type="checkbox">
				Remember Me?
			</label>
			<input name="submit" value="Submit" type="submit"><br>
			<a href="#">Forget Password?</a>
		</form>
		<pre>
			<?php
				//Zone 2
				echo("GET variables:\r\n");
				var_dump($_GET);
				echo("POST variables:\r\n");
				var_dump($_POST);
			?>
		</pre>
	</body>
</html>