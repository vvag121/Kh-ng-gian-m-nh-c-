<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/content.css">
	<title>Music Space</title>
	<style>
		/* Tổng thể body */
		body {
			margin: 0;
			font-family: Arial, sans-serif;
			background-image: linear-gradient(to bottom, #1d2671, #c33764); /* Nền gradient */
			background-size: cover;
			background-position: center;
			color: white;
		}

		.container {
			padding: 20px;
		}

		.taskbar {
			display: flex;
			align-items: center;
			padding: 10px;
			background-color: rgba(0, 0, 0, 0.7); /* Thanh công cụ trong suốt */
			border-radius: 8px;
			margin-bottom: 20px;
		}

		.logo {
			width: 60px;
			margin-right: 20px;
		}

		.textSearch {
			flex: 1;
			padding: 10px;
			border: none;
			border-radius: 8px;
			margin-right: 10px;
		}

		.btnSearch {
			padding: 10px 20px;
			border: none;
			background-color: #c33764;
			color: white;
			border-radius: 8px;
			cursor: pointer;
			font-size: 16px;
		}

		.btnSearch:hover {
			background-color: #1d2671;
		}

		.user {
			width: 40px;
			margin-left: 20px;
			cursor: pointer;
		}

		.name {
			margin-left: 10px;
			font-size: 16px;
		}

		.content table {
			width: 100%;
			border-spacing: 15px;
			text-align: center;
		}

		.songBox {
			background-color: rgba(0, 0, 0, 0.7); /* Hộp bài hát trong suốt */
			padding: 20px;
			border-radius: 12px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
		}

		.icon {
			width: 30px;
			margin: 5px;
			cursor: pointer;
		}

		.avatar {
			width: 80px;
			height: 80px;
			border-radius: 50%;
			margin: 10px 0;
		}

		.showAudio h1 {
			font-size: 18px;
			color: #c33764;
		}

		.showAudio h1:hover {
			color: #1d2671;
		}

		audio {
			width: 100%;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<?php 
		session_start();
		include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/bo/LoadInterface.php");
		if($_SESSION['id'] == "1"){
			$_SESSION['songList'] = loadSong();
		} else {
			$_SESSION['songList'] = search($_SESSION['search']);
		}
	 ?>
	<div class="container">
		<form action="../model/bo/searchHandle.php" method="post">
			<div class="taskbar">
				<a href="./content.php">
					<img src="../../../res/icon/logo03.png" title="Home" class="logo">
				</a>
				<input type="text" name="txtSearch" placeholder="Search" class="textSearch" required>
				<input type="submit" name="btnSearch" class="btnSearch" value="Search">
				<a href="./login.php">
					<img src="../../../res/icon/user.png" class="user" title="<?php echo $_SESSION['state'] ?>">
				</a>
				<label class="name"><?php echo $_SESSION['user'] ?></label>
			</div>
		</form>
		<div class="content">
			<form method="POST">
				<table>
					<?php 
						$row = 0;
					?>
					 <tr>
					 	<?php 
					 		foreach($_SESSION['songList'] as $data){
					 	?>
					 		<td>
					 			<div class="songBox">
					 				<img src="../../../res/icon/like.png" class="icon like" title="<?php echo "Like: ".$data['numLike'] ?>">
					 				<img src="../../../res/icon/comment.png" class="icon comment" title="<?php echo "Comment: ".$data['numComment'] ?>">
					 				<img title="<?php echo "Download: ".$data['numDownload'] ?>" src="../../../res/icon/download.png" class="icon download">
					 				<img src="<?php echo "../../../res/singer/".$data['imageSinger'] ?>" class="avatar">
					 				<a href="./content.php?bh=<?php echo $data['srcSong'] ?>" class="showAudio">
					 					<h1 title="<?php echo $data['nameComposer'] ?>"><?php echo $data['nameSong'] ?></h1>
					 				</a>
					 				<h3><?php echo $data['nameSinger'] ?></h3>
					 			</div>
					 		</td>
					 		<?php 
					 			if(++$row == 4){
					 				$row = 0;
					 		?>
					 		 	</tr>
					 		 	<tr>
					 		<?php 
					 			}
					 		?>
					 	<?php 
					 		}
					 	?>
					 </tr>
				</table>
			</form>
			<form class="play">
				<audio controls autoplay>
    				<source src="<?php echo "../../../res/audio/".$_GET['bh'].".mp3" ?>" type="audio/ogg">
				</audio>
			</form>
		</div>
	</div>
</body>
</html>
s