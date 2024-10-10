<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function registrasi($data){
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $No_telp = mysqli_real_escape_string($conn, $data["nomor"]);
    $Alamat = mysqli_real_escape_string($conn, $data["alamat"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["confirm-password"]);

    // Cek username
    $result = mysqli_query($conn, "SELECT Email FROM customer WHERE Email = '$email'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
         alert('username sudah ada');
         </script>";
        return false; 
    }

    // Cek konfirmasi password
    if($password != $password2){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    
    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    // mysqli_query($conn, "INSERT INTO customer VALUES ('','$username', '$email', '$gender', '$password')");
    mysqli_query($conn, "INSERT INTO `customer` (`Nama`, `Email`, `No_telp`, `Alamat`, `username`, `password`) 
    VALUES ('$nama', '$email', '$No_telp', '$Alamat', '$username', '$password')");    
    return mysqli_affected_rows($conn);
}
?>