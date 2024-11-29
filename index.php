<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>

<body>
    <h1>Buku Tamu</h1>
    <form action="proses.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required maxlength="200"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required maxlength="50"><br><br>

        <label for="isi">Isi:</label><br>
        <textarea id="isi" name="isi" required></textarea><br><br>

        <button type="submit">Kirim</button>

        <button type="submit"> <a href="lihat.php">Lihat</a></button>
    </form>
</body>
</html>
<!-- Nama : Annora Iffah Diniyah Darma -->
 <!-- NIM : 202331162 -->