<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style/home.css">
</head>
<body>
	<div class="container">
		<div class="taskbar">
			<a href="../index.html" title="Home"><img src="../res/icon/logo03.png" class="logo"></a>
			<!-- MENU -->
			<div class="menu">
				<ul>
					<a href="home.php?id=1"><li>Song</li></a>
					<a href="home.php?id=2"><li>Singer</li></a>
					<a href="home.php?id=3"><li>Composer</li></a>
					<a href="home.php?id=4"><li>Listener</li></a>
				</ul>
			</div>
			<span class="nameAdmin" onclick="showAdminInfo()"><?php echo $_SESSION['nameAdmin'] ?></span>
		</div>
		<div class="adminInfo">
			<form action="../source/php/controller/updateAdmin.php" method="post">
				<img src="../res/icon/close.png" class="close" onclick="closeAdminInfo()">
				<table>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['emailAdmin'] ?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="txtNameAdmin" value="<?php echo $_SESSION['nameAdmin'] ?>"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="txtAddress" value="<?php echo $_SESSION['address'] ?>"></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="text" name="txtPhone" value="<?php echo $_SESSION['phone'] ?>"></td>
					</tr>
				</table>
				<input type="button" value="Change Password" class="submitUpdate btnChangePass" onclick="showChange()">
				<input type="submit" value="Update" name="submit" class="submitUpdate">
				<input type="submit" value="Logout" name="submit" class="submitUpdate logout">
			</form>
			<div class="changePass">
					<form action="../source/php/controller/changePassAdmin.php" method="post">
						<table>
							<tr>
								<td>Mật khẩu</td>
								<td><input type="password" name="txtPassOld" placeholder="Password" required></td>
							</tr>
							<tr>
								<td>Mật khẩu mới</td>
								<td><input type="password" name="txtPassNew" placeholder="New password" required id="pass"></td>
							</tr>
							<tr>
								<td>Nhập lại mật khẩu</td>
								<td><input type="password" name="txtPassRe" placeholder="Re new password" required onchange="checkPass()" id="repass"></td>
								<script type="text/javascript">
									function checkPass() {
										var repass = document.getElementById("repass").value;
										var pass = document.getElementById("pass").value;
										if(repass != pass)
											document.getElementById("alertPass").innerHTML = "Không trùng khớp";
										else
											document.getElementById("alertPass").innerHTML = "";
									}
								</script>
							</tr>
							<tr>
								<td></td>
								<td id="alertPass"></td>
							</tr>
						</table>
						<input type="submit" value="Change" class="submitUpdate submitChange">
						<input type="button" value="Cancel" class="submitUpdate" onclick="closeRepass()">
					</form>
				</div>
		</div>
		<div class="content">
			<img src="../res/icon/add.png" class="control add" onclick="show(0)">
			<img src="../res/icon/upd.png" class="control upd" onclick="show(1)">
			<img src="../res/icon/del.png" class="control del" onclick="show(2)">

			<script type="text/javascript">
				var isFlag = false;
				function show(a){
					var element = document.getElementsByClassName("controlElement")[a];
					if(!isFlag)
						element.style.display = "block";
					else
						element.style.display = "none";
					isFlag = !isFlag;
				}
			</script>
			<?php 
				$id = $_GET['id'];
				switch ($id) {
					case '1':
						include("songManager.php");
						break;
					case '2':
						include("singerManager.php");
						break;
					case '3':
						include("composerManager.php");
						break;
					case '4':
						include("listenerManager.php");
						break;
					default:
						break;
				}
			 ?>

			<div class="addElement controlElement">
				<img src="../res/icon/close.png" class="close" onclick="closeControlElement(0)">
				<form action="../source/php/controller/controlElement.php" method="post">
				 	<table>
				 		<?php 
				 			$i = 0;
				 			foreach($titleName as $name){
				 		 ?>
				 		<tr>
				 			<td><?php echo $name ?></td>
				 			<td><input type="text" name="txt<?php echo $title[$i] ?>" placeholder="<?php echo $titleName[$i] ?>" required></td>
				 		</tr>
				 		<?php 
				 				$i++;
				 		 	}
				 		 ?>
				 	</table>
				 	<input type="submit" name="submit" value="Add" class="submit">
			 	</form>
			</div>
			<div class="updateElement controlElement">
				<img src="../res/icon/close.png" class="close" onclick="closeControlElement(1)">
				<form action="../source/php/controller/controlElement.php" method="post">
				 	<table>
				 		<?php 
				 			$i = 0;
				 			foreach($titleName as $name){
				 		 ?>
				 		<tr>
				 			<td><?php echo $name ?></td>
				 			<td><input type="text" name="txt<?php echo $title[$i] ?>" placeholder="<?php echo $titleName[$i]?>" required></td>
				 		</tr>
				 		<?php 
				 				$i++;
				 		 	}
				 		 ?>
				 	</table>
				 	<input type="submit" name="submit" value="Update" class="submit">
			 	</form>
			</div>
			<div class="deleteElement controlElement">
				<img src="../res/icon/close.png" class="close" onclick="closeControlElement(2)">
				<form action="../source/php/controller/controlElement.php" method="post">
				 	<table>
				 		<tr>
				 			<td><?php echo $titleName[0] ?></td>
				 			<td><input type="text" name="txt<?php echo $title[0] ?>" placeholder="<?php echo $titleName[0] ?>" required></td>
				 		</tr>
				 	</table>
				 	<input type="submit" name="submit" value="Delete" class="submit">
			 	</form>
			</div>

			<script type="text/javascript">
				function closeControlElement(a){
					var element = document.getElementsByClassName("controlElement")[a];
					element.style.display = "none";
					isFlag = false;
				}
			</script>
		</div>
	</div>


	<script type="text/javascript">
		var flagAdmin = false;
		function showAdminInfo(){
			var element = document.getElementsByClassName("adminInfo")[0];
			if(!flagAdmin){
				element.style.display = "block";
			} else {
				element.style.display = "none";
			}
			flagAdmin = !flagAdmin;
		}

		function closeAdminInfo(){
			var element = document.getElementsByClassName("adminInfo")[0];
				element.style.display = "none";
			flagAdmin = false;
		}

		var flagChange = false;
		function showChange(){
			var element = document.getElementsByClassName("changePass")[0];
			if(!flagChange){
				element.style.display = "block";
			} else {
				element.style.display = "none";
			}
			flagChange = !flagChange;
		}

		function closeRepass(){
			var element = document.getElementsByClassName("changePass")[0];
			element.style.display = "none";
			flagChange = false;
		}
	</script>
</body>
</html>