<?php
$LIST = $_POST['list'];
include "config.php"; // Make sure this path is correct
mysqli_query($con, "INSERT INTO `todo`(`list`) VALUES ('$LIST')");
header("location: index.php");
?>
