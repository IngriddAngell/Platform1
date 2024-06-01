<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<?php
$id = $_GET['id'];
include "config.php";
$Rdata = mysqli_query($conn, "select * from todo where Id = $id");
$data = mysqli_fetch_array($Rdata);
?>


<body class = "bg-info">
    <form action="./update1.php" method="POST">
    <div class="container">
        <div class="row justify-content-center m-auto bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">UPDATE</h3>
            <div class="col-10">
                <input type="text" name="id" class="form-control" value="<?php echo $data['id'] ?>">
                <input type="text" value="<?php echo $data['list'] ?>" name ="list" class="form-control">
            <div class="col-2">
                <button class="btn btn-outline-primary">Update</button>
                <input type="hidden" name = "id" value="<?php echo $data['id'] ?>">
            </div>
        </div>
    </div>
</form>
