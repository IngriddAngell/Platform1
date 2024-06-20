<?php
include '../config/function.php';

if(isset($_POST["login"])){
    echo "Form Submitted!<br>";
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo "Username: $username<br>";
    echo "Password: $password<br>";

    $result = mysqli_query($conn, "SELECT * FROM registrasi WHERE username = '$username'");

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo "Fetched User: " . print_r($row, true) . "<br>";
        if(password_verify($password, $row["password"])){
            echo "Password verified!<br>";
            header("location: kost.php");
            exit;
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        echo "<script>alert('Username not found');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="../Kost/kost.php" method="post" class="login-form">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>

        <button type="submit" name="login" class="btn btn-light btn-block">Log In</button>
        <a href="registrasi.php">Register</a>
    </form>
</body>
</html>
