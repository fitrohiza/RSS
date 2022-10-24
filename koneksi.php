<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "latihan";

$conn = mysqli_connect ($servername, $username, $password, $database);

if (!$conn){
    die ("Koneksi Gagal: " . mysqli_error());
}
echo "Koneksi Berhasil";

?>