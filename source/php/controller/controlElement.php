<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
	$email = $_SESSION['emailAdmin'];

	$submit = $_POST['submit'];

	switch($_SESSION['type']){
		case '1':
			if($submit == "Add"){
				$exec = addSong($_POST['txtIdSong'], $_POST['txtNameSong'], $_POST['txtEmailSinger'],
					$_POST['txtEmailComposer'], $_POST['txtReleaseTime'], $_POST['txtSrcSong']);
			} else if($submit == "Update"){
				$exec = updateSong($_POST['txtIdSong'], $_POST['txtNameSong'], $_POST['txtEmailSinger'],
					$_POST['txtEmailComposer'], $_POST['txtReleaseTime'], $_POST['txtSrcSong']);
			} else {
				$exec = deleteSong($_POST['txtIdSong']);
			}
			break;
		case '2':
			if($submit == "Add"){
				$exec = addSinger($_POST['txtEmail'], $_POST['txtNameSinger'], $_POST['txtBirthday'],
					$_POST['txtAddress'], $_POST['txtImageSinger']);
			} else if($submit == "Update"){
				$exec = updateSinger($_POST['txtEmail'], $_POST['txtNameSinger'], $_POST['txtBirthday'],
					$_POST['txtAddress'], $_POST['txtImageSinger']);
			} else {
				$exec = deleteSinger($_POST['txtEmail']);
			}
			break;
		case '3':
			if($submit == "Add"){
				$exec = addComposer($_POST['txtEmail'], $_POST['txtNameComposer'], $_POST['txtBirthday'],$_POST['txtAddress'], $_POST['txtImageComposer']);
			} else if($submit == "Update"){
				$exec = updateComposer($_POST['txtEmail'], $_POST['txtNameComposer'], $_POST['txtBirthday'],$_POST['txtAddress'], $_POST['txtImageComposer']);
			} else {
				$exec = deleteComposer($_POST['txtEmail']);
			}
			break;
		case '4':
			if($submit == "Add"){
				$exec = addListener($_POST['txtEmail'], $_POST['txtNameListener'], $_POST['txtBirthday'],$_POST['txtAddress']);
			} else if($submit == "Update"){
				$exec = updateListener($_POST['txtEmail'], $_POST['txtNameListener'], $_POST['txtBirthday'],$_POST['txtAddress']);
			} else {
				$exec = deleteListener($_POST['txtEmail']);
			}
			break;
		default:
			break;
	}

	echo "CO";

	// load songList
	$data = getSongListAdmin();
	$songList = array();
	foreach($data as $dataRow){
		$songList[] = array($dataRow['idSong'], $dataRow['nameSong'], $dataRow['emailSinger'], $dataRow['emailComposer'], $dataRow['releaseTime'], $dataRow['srcSong'], $dataRow['numLike'], $dataRow['numComment'], $dataRow['numDownload'], $dataRow['nameSinger'], $dataRow['nameComposer']);
	}
	$_SESSION['songList'] = $songList;

	// load singerList
	$data = getSingerList();
	$singerList = array();
	foreach($data as $dataRow){
		$singerList[] = array($dataRow['email'], $dataRow['nameSinger'], $dataRow['birthday'], $dataRow['address'], $dataRow['imageSinger']);
	}
	$_SESSION['singerList'] = $singerList;

	// load composerList
	$data = getComposerList();
	$composerList = array();
	foreach($data as $dataRow){
		$composerList[] = array($dataRow['email'], $dataRow['nameComposer'], $dataRow['birthday'], $dataRow['address'], $dataRow['imageComposer']);
	}
	$_SESSION['composerList'] = $composerList;

	// load listenerList
	$data = getListenerList();
	$listenerList = array();
	foreach($data as $dataRow){
		$listenerList[] = array($dataRow['email'], $dataRow['nameListener'], $dataRow['birthday'], $dataRow['address']);
	}
	$_SESSION['listenerList'] = $listenerList;


	$adminData = getAdminInfo($email);
	$admin = array();
	foreach ($adminData as $row){
		$admin = $row;
	}
	$_SESSION['emailAdmin'] = $admin[0];
	$_SESSION['nameAdmin'] = $admin[1];
	$_SESSION['address'] = $admin[2];
	$_SESSION['phone'] = $admin[3];
	header("location:../../../admin/home.php?id=".$_SESSION['type']);
	
 ?>