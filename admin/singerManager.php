<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>SINGER</h1>
	<form>
		<table>
			<thead>
				<tr>
					<td>Email Singer</td>
					<td>Name Singer</td>
					<td>Birthday</td>
					<td>Address</td>
					<td>Photo</td>
					<?php 
						$title = array("Email", "NameSinger", "Birthday", "Address", "ImageSinger");
						$titleName = array("Email Singer", "Name Singer", "Birthday", "Address", "Image Singer");
						$_SESSION['type'] = "2";
					 ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					$singerList = $_SESSION['singerList'];
					foreach($singerList as $d){
				 ?>
				 <tr>
				 	<?php 
				 		foreach($d as $s){
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