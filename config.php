<?php
$server = "192.168.0.115";
$database = "app_msql";
$username = "appdb";
$password = "Appdb123!";

try {
    $conn = new PDO("dblib:host=$server;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi database Berhasil!";
} catch (PDOException $e) {
    echo "Koneksi database Gagal: " . $e->getMessage();
}
?>
