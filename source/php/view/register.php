<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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

        input[type="email"], input[type="password"], input[type="text"], input[type="date"] {
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

        input[type="email"]::placeholder, input[type="password"]::placeholder, input[type="text"]::placeholder {
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

        /* Thông báo lỗi */
        .error {
            color: red;
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>

        <!-- Hiển thị thông báo lỗi nếu có -->
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="error">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form action="../controller/registerListener.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="txtName" placeholder="Enter your Name" required></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="txtUser" placeholder="Enter your email" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="txtPass" placeholder="Enter your password" required></td>
                    </tr>
                    <tr>
                        <td>Birthday:</td>
                        <td><input type="date" name="txtBirthday" placeholder="Enter your birthday" required></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="txtAddress" placeholder="Enter your address" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" name="btn" value="Register">
                            <a href="login.php" class="register-button">Back to Login</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>
