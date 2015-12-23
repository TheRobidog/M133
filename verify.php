<?php
	include_once('controller/accountcontroller.php');

	//session_start();
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	/*
	$accounts = file('storage/account.txt');

	foreach($accounts as $account){
		$accdata = explode(':',$account);
		$accuser = $accdata['1'];
		$accpass = trim($accdata['2']);

		if($username == $accuser && $password == $accpass){
			$_SESSION['id'] = $accdata['0'];
			$_SESSION['name'] = $username;
			header("Location: index.php");
		}
	}
	*/

	$acccon = new AccountController();
	$confirm = $acccon->CheckLogin($username,$password);
	if($confirm){
		header('Location: index.php');
	}else{
		header('Location: login.php');
	}
?>