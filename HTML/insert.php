<?php
$LIST = $_POST['list'];
include "config.php"; // Make sure this path is correct
mysqli_query($conn, "INSERT INTO `kos`(`list`) VALUES ('$LIST')");
header("location: index.php");
?>