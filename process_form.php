<?php
// Konfigurasi koneksi database
$servername = "localhost";  // Nama host database
$username = "root";         // Nama pengguna database
$password = "";             // Kata sandi database
$dbname = "contact_db";     // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Nim = $_POST['Nim'];
    $Message = $_POST['Message'];

    // Mencegah SQL Injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $Nim = $conn->real_escape_string($Nim);
    $Message = $conn->real_escape_string($Message);

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO contacts (name,email,nim,Message) VALUES ('$name', '$email', '$Nim','$Message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan Anda telah berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
