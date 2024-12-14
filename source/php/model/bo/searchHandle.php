<?php 

    session_start();
    $_SESSION['id'] = '2';
    $_SESSION['search'] = $_POST['txtSearch'];
    // echo $_SESSION['id'];
    // if($_POST['txtSearch'] != ' '){
    //     include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");
    //     $_SESSION['songList'] = search($_POST['txtSearch']);
    //     foreach($_SESSION['songList'] as $d){
    //         echo "<br>".$d['nameSong'];
    //     }
    //     // // $titleSong = array("nameSong", "nameSinger", "nameComposer", "imageSinger", "srcSong", "numLike", "numComment", "numDownload");
    //     // // $_SESSION['songList'] = $songList;
    //     $_SESSION['id'] = '2';
        header('location:'."../../view/content.php");
    // }
    
 ?>