
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Jumlah Bola Triangular</title>
</head>
<body>
    <form method="post" action="">
        <label for="jumlah_bola">Jumlah Bola Paling Bawah:</label>
        <input type="number" name="jumlah_bola" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>

<?php
// Fungsi untuk menghitung jumlah bola dalam suatu triangular
function hitungJumlahBola($jumlahBolaPalingBawah)
{
    // Menggunakan rumus jumlah deret aritmatika: n * (n + 1) / 2
    $jumlahBola = $jumlahBolaPalingBawah * ($jumlahBolaPalingBawah + 1) / 2;

    return $jumlahBola;
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai jumlah bola paling bawah dari formulir
    $jumlahBolaPalingBawah = $_POST["jumlah_bola"];

    // Memastikan jumlah bola paling bawah adalah angka positif
    if (is_numeric($jumlahBolaPalingBawah) && $jumlahBolaPalingBawah > 0) {
        // Menghitung jumlah bola
        $hasil = hitungJumlahBola($jumlahBolaPalingBawah);

        // Menampilkan hasil
        echo "Jumlah bola dalam triangular dengan $jumlahBolaPalingBawah bola adalah: $hasil";
    } else {
        // Menampilkan pesan kesalahan jika input tidak valid
        echo "Masukkan jumlah bola paling bawah yang valid (angka positif).";
    }
}
?>
