<?php
session_start();

// Simulasi data kamar kost
$rooms = [
    ['id' => 1, 'name' => 'Kamar A', 'image' => '../images/kamar1.jpg'],
    ['id' => 2, 'name' => 'Kamar B', 'image' => '../images/kamar2.jpeg'],
    ['id' => 3, 'name' => 'Kamar C', 'image' => '../images/kamar3.jpg'],
    ['id' => 4, 'name' => 'Kamar D', 'image' => '../images/kamar1.jpg'],
    ['id' => 5, 'name' => 'Kamar E', 'image' => '../images/kamar2.jpeg'],
    ['id' => 6, 'name' => 'Kamar F', 'image' => '../images/kamar3.jpg'],
    ['id' => 7, 'name' => 'Kamar G', 'image' => '../images/kamar1.jpg'],
    ['id' => 8, 'name' => 'Kamar H', 'image' => '../images/kamar2.jpeg'],
    ['id' => 9, 'name' => 'Kamar I', 'image' => '../images/kamar3.jpg'],
    ['id' => 10, 'name' => 'Kamar J', 'image' => '../images/kamar1.jpg'],
    ['id' => 11, 'name' => 'Kamar K', 'image' => '../images/kamar2.jpeg'],
    ['id' => 12, 'name' => 'Kamar L', 'image' => '../images/kamar3.jpg'],
    ['id' => 13, 'name' => 'Kamar M', 'image' => '../images/kamar1.jpg'],
    ['id' => 14, 'name' => 'Kamar N', 'image' => '../images/kamar2.jpeg'],
    ['id' => 15, 'name' => 'Kamar O', 'image' => '../images/kamar3.jpg'],
    ['id' => 16, 'name' => 'Kamar P', 'image' => '../images/kamar1.jpg'],
    ['id' => 17, 'name' => 'Kamar Q', 'image' => '../images/kamar2.jpeg'],
    ['id' => 18, 'name' => 'Kamar R', 'image' => '../images/kamar3.jpg'],
    ['id' => 19, 'name' => 'Kamar S', 'image' => '../images/kamar1.jpg'],
    ['id' => 20, 'name' => 'Kamar T', 'image' => '../images/kamar2.jpeg'],
];

// Handle jika ada parameter id yang dikirimkan (kamar dipilih)
if (isset($_GET['id'])) {
    $roomId = $_GET['id'];
    
    // Cari kamar yang sesuai dengan id
    $selectedRoom = array_filter($rooms, function ($room) use ($roomId) {
        return $room['id'] == $roomId;
    });
    
    // Jika ditemukan, simpan informasi kamar ke session
    if (!empty($selectedRoom)) {
        $_SESSION['selected_room'] = reset($selectedRoom); // Ambil elemen pertama dari array hasil filter
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kamar Kost</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/kost.css">
    <!-- Partikel JS -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>
<body>
    
    <div id="particles-js"></div>
    <div class="container">
        
        <div class="row">
            <?php foreach ($rooms as $room): ?>
                <div class="col-md-4 room">
                    <div class="card">
                        <a href="../sewa/sewa.php?id=<?php echo $room['id']; ?>">
                            <img src="<?php echo $room['image']; ?>" class="card-img-top" alt="<?php echo $room['name']; ?>">
                        </a>
                        <div class="card-body text-center">
                            <h3 class="card-title"><?php echo $room['name']; ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-WEj0VXkBI2WkUmR2GEAr7pN1Z0QKtvHohqMKNmK8ho2I4ShZsh2e5khLPvFJbbMO" crossorigin="anonymous"></script>

    <!-- Script untuk Partikel -->
    <script src="../js/particle.js"></script>
</body>
</html>
