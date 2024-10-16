<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Kamar Kost</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/sewa.css">
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="form-penyewaan" checked><label for="tab-1" class="tab">Form Penyewaan</label>
        <div class="login-form">
            <div class="form-penyewaan-htm">
                <form id="sewaForm">
                    <div class="group">
                        <label for="nama" class="label">Nama</label>
                        <input id="nama" type="text" class="input" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input id="email" type="email" class="input" placeholder="Masukkan Email Anda">
                    </div>
                    <div class="group">
                        <label for="telepon" class="label">Nomor Telepon</label>
                        <input id="telepon" type="tel" class="input" placeholder="Masukkan Nomor Telepon Anda">
                    </div>
                    <div class="group">
                        <label for="tanggal" class="label">Tanggal Check-in</label>
                        <input id="tanggal" type="date" class="input">
                    </div>
                    <div class="group">
                        <label for="tipe_kamar" class="label">Tipe Kamar</label>
                        <input id="tipe_kamar" type="text" class="input" placeholder="Misal: Kamar A, Kamar B, Kamar C...">
                    </div>
                    <div class="group">
                        <input type="button" class="button" value="Kirim via WhatsApp" onclick="sendWhatsApp()">
                    </div>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-WEj0VXkBI2WkUmR2GEAr7pN1Z0QKtvHohqMKNmK8ho2I4ShZsh2e5khLPvFJbbMO" crossorigin="anonymous"></script>

<!-- JavaScript External -->
<script>
function sendWhatsApp() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var telepon = document.getElementById("telepon").value;
  var tanggal = document.getElementById("tanggal").value;
  var tipeKamar = document.getElementById("tipe_kamar").value;

  // Validasi input
  if (!nama || !email || !telepon || !tanggal || !tipeKamar) {
    alert("Mohon isi semua field!");
    return;
  }

  // Debugging log
  console.log("Nama:", nama);
  console.log("Email:", email);
  console.log("Telepon:", telepon);
  console.log("Tanggal:", tanggal);
  console.log("Tipe Kamar:", tipeKamar);

  // Format pesan untuk WhatsApp
  var message = "Pemesanan Kamar Kost:\n\n" + "Nama: " + nama + "\n" + "Email: " + email + "\n" + "Nomor Telepon: " + telepon + "\n" + "Tanggal Check-in: " + tanggal + "\n" + "Tipe Kamar: " + tipeKamar;

  // URL untuk WhatsApp dengan parameter pesan
  var url = "https://wa.me/6285727720448?text=" + encodeURIComponent(message);

  // Debugging log untuk URL
  console.log("WhatsApp URL:", url);

  // Arahkan pengguna ke WhatsApp
  window.location.href = url;
}
</script>
</body>
</html>
