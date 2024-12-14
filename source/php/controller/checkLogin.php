<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
	$email = $_POST['txtUser'];
	$password = $_POST['txtPass'];
	if(checkLogin(new Account($email, $password))){
		$_SESSION['user'] = $email;
		$_SESSION['state'] = 'Logout';
		header("location:../view/content.php");
	} else {
		header("location:../view/login.php");
	}
 ?>