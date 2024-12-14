<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>THE SONG</h1>
	<form>
		<table>
			<thead>
				<tr>
					<td>Id Song</td>
					<td>Name Song</td>
					<td>Email Singer</td>
					<td>Email Composer</td>
					<td>Release Time</td>
					<td>Src Song</td>
					<td>Num Like</td>
					<td>Num Comment</td>
					<td>Num Download</td>
					<td>Name Singer</td>
					<td>Name Composer</td>
					<?php 
						$title = array("IdSong", "NameSong", "EmailSinger", "EmailComposer", "ReleaseTime", "SrcSong");
						$titleName = array("Id Song", "Name Song", "Email Singer", "Email Composer", "Release Time", "Source Song");
						$_SESSION['type'] = "1";
					 ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					$songList = $_SESSION['songList'];
					foreach($songList as $song){
				 ?>
				 <tr>
				 	<?php 
				 		foreach($song as $s){
				 	 ?>
				 	<td><?php echo $s ?></td>
				 	<?php 
				 		}
				 	 ?>
				 </tr>
				 <?php 
				 	}
				  ?>
			</tbody>
		</table>
	</form>
</body>
</html>