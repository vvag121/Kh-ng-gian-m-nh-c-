<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
	$email = $_SESSION['emailAdmin'];
	$passOld = $_POST['txtPassOld'];
	$passNew = $_POST['txtPassNew'];
	$passRe = $_POST['txtPassRe'];

	$pass_List = getPassAdmin($email);
	$pass = "";
	foreach($pass_List as $p){
		$pass = $p[0];
	}

	if($passRe == $passNew && $pass == $passOld){
		$exec = changePassAdmin(new Account($email, $passRe));
	}

	$adminData = getAdminInfo($email);
	$admin = array();
	foreach ($adminData as $row){
		$admin = $row;
	}
	$_SESSION['emailAdmin'] = $admin[0];
	$_SESSION['nameAdmin'] = $admin[1];
	$_SESSION['address'] = $admin[2];
	$_SESSION['phone'] = $admin[3];
	header("location:../../../admin/home.php?id=1");
 ?>