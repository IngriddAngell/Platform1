<?php
require '../config/function.php';
if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('user baru berhasil ditambahkan!')
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="index.php" method="post">
        <h3>Register Here</h3>

        <label for="nama">Nama</label>
        <input type="text" placeholder="Nama" id="nama" name="nama" required>

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email" required>

        <label for="nomor">No. Telp</label>
        <input type="text" placeholder="No. Telpon" id="nomor" name="nomor" required>

        <label for="alamat">Alamat</label>
        <input type="text" placeholder="Alamat" id="alamat" name="alamat" required>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username" required>

        </div>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password" required>

        <button type="submit" class="btn btn-light btn-block" name="register">Register</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>