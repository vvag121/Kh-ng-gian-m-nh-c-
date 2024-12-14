<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>LISTENER</h1>
	<form>
		<table>
			<thead>
				<tr>
					<td>Email</td>
					<td>Name</td>
					<td>Birthday</td>
					<td>Address</td>
					<?php 
						$title = array("Email", "NameListener", "Birthday", "Address");
						$titleName = array("Email Listener", "Name Listener", "Birthday", "Address");
						$_SESSION['type'] = "4";
					 ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					$listenerList = $_SESSION['listenerList'];
					foreach($listenerList as $d){
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