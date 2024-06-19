<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sewakos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css"/>
    <title>Sewa Kos</title>
</head>
<body id="home">
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd;">
      <div class="container">   
        <a class="navbar-brand" href="">
          <img src="logokos.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-center" />
          Sewa Kos
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events">Kamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak Kami</a>
            </li>
            <button type="button" class="btn btn-info btn-sm">Login</button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron  -->
    <section class="jumbotron text-center mb-3">
        <img src="logokos.jpg" alt="Sewa" width="150" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Sewa Kos</h1>
    </section>
    <!-- Akhir Jumbotron  -->  

    <!-- Tentang -->
    <section id="about">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Tentang</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-6 text-center">
            <div class="col-md-4">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, atque? Iure ab, suscipit doloribus consequuntur voluptate rem dolorem impedit unde quis obcaecati recusandae quo enim veritatis, pariatur debitis corporis hic?</p>
            </div>
            <div class="col-md-4">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quia architecto dolor, nulla hic dicta nemo iure consequatur, corrupti voluptas similique sint exercitationem sunt eveniet praesentium veniam adipisci rerum a.</p>
            </div>
          </div>
        </div>
    </section>
    <!-- Akhir Tentang -->

    <!-- Kamar --> 
    <section id="events">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Kamar</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- Akhir kamar -->

      <!-- Fasilitas --> 
      <section id="fasilitas">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2>Fasilitas</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- Akhir kamar -->

        <!--Kontak-->
        <section id="kontak">
          <div class="container">
            <div class="row text-center">
              <div class="col">
                <h2>Kontak</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">WhatsApp: 082322531400</li>
                    <li class="list-group-item">Instagram: @sewakost.id</li>
                    <li class="list-group-item">Website: www.sewakost.com</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Akhir Kontak-->

        <!-- Table Section -->
        <section id="table">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2>User Data</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Tipe Kamar</th>
                      <th scope="col">Harga Kamar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT id, username, password, tipe_kamar, harga_kamar FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $row["id"]. "</th>";
                            echo "<td>" . $row["username"]. "</td>";
                            echo "<td>" . $row["password"]. "</td>";
                            echo "<td>" . $row["tipe_kamar"]. "</td>";
                            echo "<td>" . $row["harga_kamar"]. "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>0 results</td></tr>";
                    }
                    $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
        <!-- End Table Section -->

</body>
</html>
