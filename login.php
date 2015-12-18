<!DOCTYPE HTML>

<html>

	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<h1>Login</h1>
		<form action="verify.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required><br>
			<input type="submit" value="Login">
		</form>
		<a href="register.php">Register</a>
		<?php
			session_start();
			if(isset($_SESSION['name'])){
				header("Location: index.php");
			}
			if(isset($_GET['createdacc'])){
				echo "Account has been created";
			}
		?>
	</body>

</html>