function sendWhatsApp() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var telepon = document.getElementById("telepon").value;
  var tanggal = document.getElementById("tanggal").value;
  var tipeKamar = document.getElementById("tipe_kamar").value;

  // Format pesan untuk WhatsApp
  var message = "Pemesanan Kamar Kost:\n\n" + "Nama: " + nama + "\n" + "Email: " + email + "\n" + "Nomor Telepon: " + telepon + "\n" + "Tanggal Check-in: " + tanggal + "\n" + "Tipe Kamar: " + tipeKamar;

  // URL untuk WhatsApp dengan parameter pesan
  var url = "https://wa.me/6285727720448?text=" + encodeURIComponent(message);

  // Arahkan pengguna ke WhatsApp
  window.location.href = url;
}
