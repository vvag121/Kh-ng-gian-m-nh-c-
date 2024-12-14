<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
	$email = $_POST['txtEmail'];
	$password = $_POST['txtPass'];
	if(checkLoginAdmin(new Account($email, $password))){
		$adminData = getAdminInfo($email);
		$admin = array();
		foreach ($adminData as $row){
			$admin = $row;
		}
		$_SESSION['emailAdmin'] = $admin[0];
		$_SESSION['nameAdmin'] = $admin[1];
		$_SESSION['address'] = $admin[2];
		$_SESSION['phone'] = $admin[3];

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

		header("location:../../../admin/home.php?id=1");
	} else {
		header("location:../../../admin/index.php");
	}
 ?>