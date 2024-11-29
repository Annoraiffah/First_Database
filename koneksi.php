<?php
$host = "localhost"; // Ganti jika menggunakan host lain
$user = "root";      // Username database
$pass = "";          // Password database
$db = "tugas_pemweb";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Nama : Annora Iffah Diniyah Darma
// NIM : 202331162 -->