<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./style/index.css">
</head>
<body>
<div class="container">
	<h1>Login Admin</h1>
	<form action="../source/php/controller/checkLoginAdmin.php" method="post">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="email" name="txtEmail" placeholder="Email" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="txtPass" placeholder="Password" required></td>
			</tr>
		</table>
		<input type="submit" name="btnLogin" value="Login" class="submit">
	</form>
</div>
</body>
</html>