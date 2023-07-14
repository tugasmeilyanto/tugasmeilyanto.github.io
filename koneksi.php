<?php

// Membuat koneksi
$conn = new mysqli("localhost", "root", "", "db_testing");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";

?>