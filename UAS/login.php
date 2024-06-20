<?php
include 'function.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) == 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            header("location: index.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            max-width: 80%;
            margin: 0 auto;
            text-align: center; 
        }

        .login-container h1 {
            margin-bottom: 20px;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check label {
            margin-left: 5px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

        .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-name {
            font-weight: bold;
        }

        .profile-nim {
            color: #777;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <img src="ingrid.png" alt="Profile Photo" class="profile-photo">
        <p class="profile-name">Ingrid Felita Angel Santoso</p>
        <p class="profile-nim">225314004</p>
        <form action="" method="post" class="login-form">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="login" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>
