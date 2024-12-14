<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/header.css">
    <title>Music Space</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 3rem;
            margin: 0;
            letter-spacing: 2px;
            font-weight: bold;
            color: #fdbb2d;
        }

        h2 {
            font-size: 1.5rem;
            margin-top: 10px;
            color: #ecf0f1;
        }

        /* Button Style */
        .btn {
            margin-top: 30px;
            padding: 15px 25px;
            font-size: 1rem;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #f39c12;
        }

        .btn:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <h1>
        <?php 
            session_start();
            $_SESSION['user'] = '';
            $_SESSION['state'] = 'Login';
            $_SESSION['id'] = "1";
            $_SESSION['songList'] = NULL;
            echo "Music Space";
        ?>
    </h1>
    <h2>Giải trí bất tận cùng âm nhạc</h2>
  
</body>
</html>
