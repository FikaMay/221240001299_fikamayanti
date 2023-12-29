<?php

include 'koneksi.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if ($username == 'admin' && $password == md5('admin')) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
        } else {
                $_SESSION['login_eror'] = "Username or password is incorrect";
                header("Location: login.php");
                exit();
        }
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 200px;
            width: 50%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color:   #8B4513;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color:  #8B0000 ;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
<body>
<form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name = "login" value="Login">
</form>
</body>
</head>
</html>
