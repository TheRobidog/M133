<!DOCTYPE HTML>

<html>

	<head>
		<title>Webshop</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php
			session_start();
			if(isset($_SESSION['name'])){
				include_once 'model/account.php';
				$test = new Account(1,'Robidog','test');
				var_dump($test);
			}else{
				header("Location: login.php");
				exit;
			}
		?>
	</body>

</html>