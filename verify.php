<?php
	session_start();
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	$accounts = file('users.txt');

	foreach($accounts as $account){
		$accdata = explode(':',$account);
		$accuser = $accdata[0];
		$accpass = trim($accdata[1]);

		if($username == $accuser && $password == $accpass){
			$_SESSION['name'] = $username;
			header("Location: index.php");
		}
	}
?>