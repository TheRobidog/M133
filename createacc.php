<?php
	include_once('controller/accountcontroller.php');
	include_once('controller/profilcontroller.php');
	
	//session_start();
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
		header("Location: register.php");
	}

	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['firstname'])){
		$firstname = $_POST['firstname'];
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}
	if(isset($_POST['postalcode'])){
		$postalcode = $_POST['postalcode'];
	}
	if(isset($_POST['town'])){
		$town = $_POST['town'];
	}
	if(isset($_POST['country'])){
		$country = $_POST['country'];
	}

	/*
	$accounts = file('storage/account.txt');

	foreach($accounts as $account){
		$accdata = explode(':',$account);
		$accuser = $accdata['1'];

		if($username == $accuser){
			header("Location: register.php");
			exit;
		}
	}

	$lastacc = end($accounts);
	$lastarr = explode(':',$lastacc);
	$id = $lastarr['0'] + 1;

	file_put_contents('storage/account.txt',$username . ':' . $password . "\n",FILE_APPEND);
	header("Location: login.php?createdacc");
	exit;
	*/

	$procon = new ProfilController();
	$proconfirm = $procon->SavePro($name,$firstname,$email,$address,$postalcode,$town,$country,);

	if($proconfirm !== null){
		$prof = $procon->LoadPro($proconfirm);
	}else{
		header("Location: register.php");
		exit;
	}

	$acccon = new AccountController();
	$accconfirm = $acccon->SaveAcc($username,$password,$prof);
	if($accconfirm){
		header("Location: login.php");
		exit;
	}
?>