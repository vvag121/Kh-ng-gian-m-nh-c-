<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
	if($_POST['submit'] == "Update"){
		$email = $_SESSION['emailAdmin'];
		$nameAdmin = $_POST['txtNameAdmin'];
		$address = $_POST['txtAddress'];
		$phone = $_POST['txtPhone'];
		$exec = updateAdmin(new Admin($email, $nameAdmin, $address, $phone));
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
	} else {
		header("location:../../../admin/index.php");
	}
	
 ?>