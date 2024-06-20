<?php

$conn = mysqli_connect("localhost", "root", "", "todo4");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query); 
    $rows=[];
    while($row = mysqli_query($conn, $query)){
        $rows[] = $row;
    }
    return $rows;
}
function registrasi ($data){
    $conn = mysqli_connect("localhost", "root", "", "todo4");

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username 
    $result = mysqli_query($conn, "SELECT username FROM kos WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
         alert('username sudah ada');
         </script>";
         return false; 
    }

    if($password != $password2){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO kos VALUES ('','$username','$password')");
    return mysqli_affected_rows($conn);

}
?>