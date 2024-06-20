<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link>
</head>
<body class="bg">
    <div class="container mt-3">
        <h1 class="text-center">Pemesanan Kamar</h1>
        <form action="insert.php" method="POST">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">Default radio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">Second default radio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
            </div>
        </form>

<!-- getdata -->
<?php
include "config.php";
$rawData= mysqli_query($conn, "select * from kos");

?>
<div class= "container">
    <div class="col-8 bg-white m-auto mt-3">

<table class="table">
    <tbody>
        <?php
        while($row = mysqli_fetch_array($rawData)){
        ?>
        <tr>
            <td><?php echo $row ['id'] ?></td>
            <td><?php echo $row ['list'] ?></td>
            <td style="width: 10%"><a href="delete.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">delete</a></td>
            <td style="width: 10%"><a href="update.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-success">update</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>
