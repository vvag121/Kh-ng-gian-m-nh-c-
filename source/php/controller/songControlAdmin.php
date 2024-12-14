<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
	
	$data = getSongListAdmin();
	$songList = array();
	foreach($data as $dataRow){
		$songList[] = array($dataRow['idSong'], $dataRow['nameSong'], $dataRow['emailSinger'], $dataRow['emailComposer'], $dataRow['releaseTime'], $dataRow['srcSong'], $dataRow['numLike'], $dataRow['numComment'], $dataRow['numDownload'], $dataRow['nameSinger'], $dataRow['nameComposer']);
	}

 ?>