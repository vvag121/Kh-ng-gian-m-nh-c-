<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>
		/* Tổng thể trang */
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background: linear-gradient(120deg, #1d2671, #c33764); /* Gradient nền */
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			color: #fff;
		}

		h1 {
			text-align: center;
			margin-bottom: 20px;
			font-size: 36px;
			color: #ffffff;
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
		}

		/* Hộp form */
		form {
			background-color: rgba(0, 0, 0, 0.8); /* Nền form trong suốt */
			padding: 20px;
			border-radius: 12px;
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6);
			width: 100%;
			max-width: 400px;
		}

		table {
			width: 100%;
		}

		td {
			padding: 10px;
			font-size: 16px;
		}

		input[type="email"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin: 5px 0;
			border: none;
			border-radius: 8px;
			background-color: rgba(255, 255, 255, 0.2);
			color: white;
			font-size: 16px;
			outline: none;
		}

		input[type="email"]::placeholder, input[type="password"]::placeholder {
			color: #ddd;
		}

		/* Nút */
		input[type="submit"], .register-button {
			padding: 10px 20px;
			margin: 5px;
			border: none;
			border-radius: 8px;
			background-color: #c33764;
			color: white;
			cursor: pointer;
			font-size: 16px;
			transition: all 0.3s ease;
			text-decoration: none;
			display: inline-block;
			text-align: center;
		}

		input[type="submit"]:hover, .register-button:hover {
			background-color: #1d2671;
			transform: scale(1.05);
		}

		/* Căn chỉnh nội dung */
		.container {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form action="../controller/checkLogin.php" method="post">
			<table>
				<tbody>
					<tr>
						<td>Email:</td>
						<td><input type="email" name="txtUser" placeholder="Enter your email" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="txtPass" placeholder="Enter your password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;">
							<input type="submit" name="btn" value="Login">
							<input type="submit" name="btn" value="Cancel">
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;">
							<!-- Nút Register -->
							<a href="register.php" class="register-button">Register</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</body>
</html>
