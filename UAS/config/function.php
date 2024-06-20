<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdasar1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $gender = mysqli_real_escape_string($conn, $data["gender"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek username
    $result = mysqli_query($conn, "SELECT username FROM register WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
         alert('username sudah ada');
         </script>";
        return false; 
    }

    // Cek konfirmasi password
    if($password != $password){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    
    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO register VALUES ('','$username', '$email', '$gender', '$password')");
    return mysqli_affected_rows($conn);
}
?>