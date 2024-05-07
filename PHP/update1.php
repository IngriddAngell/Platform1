<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdasar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed " . $conn->connect_error);
}

$sql = "UPDATE todo SET list='".$_POST['list'] . "' WHERE id= '" . $_POST['id']. "'";

if ($conn->query($sql) === TRUE){
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>