<?php
include_once "connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    $gambar = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($gambar_temp, "../assets/images/uploads/$gambar");

    date_default_timezone_set('Asia/Jakarta');
    $createdAt = date('Y-m-d H:i:s');

    $query = "INSERT INTO articles (title, content, image_path, created_at) VALUES ('$judul', '$konten', '$gambar', '$createdAt')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $_SESSION['message'] = "Artikel berhasil ditambahkan.";
        header("Location: /admin/");
        exit();
    } else {
        $_SESSION['message'] = "Terjadi kesalahan saat menambahkan artikel.";
        header("Location: /admin/");
        exit();
    }
}
