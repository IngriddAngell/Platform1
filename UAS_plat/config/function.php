<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar1");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query); 
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $gender = mysqli_real_escape_string($conn, $data["gender"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Cek username
    $result = mysqli_query($conn, "SELECT username FROM register WHERE username = '$username'");
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

    /tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO register VALUES ('','$username', '$email', '$gender', '$password')");
    return mysqli_affected_rows($conn);
}
?>

