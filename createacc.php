<?php
	session_start();
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}
	if(isset($_POST['passwordrepeat'])){
		$passwordrepeat = $_POST['passwordrepeat'];
	}
	if($password !== $passwordrepeat){

	}

	$accounts = file('users.txt');

	foreach($accounts as $account){
		$accdata = explode(':',$account);
		$accuser = $accdata[0];

		if($username == $accuser){
			header("Location: register.php");
			exit;
		}
	}

	file_put_contents('users.txt',$username . ':' . $password . "\n",FILE_APPEND);
	header("Location: login.php?createdacc");
	exit;
?>