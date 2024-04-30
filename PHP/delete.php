<?php
include "config.php";
$list = $_GET['list'];
mysqli_query($con, "DELETE FROM `tbltodo` WHERE List = '$list'");
header("location: index.php");
?>