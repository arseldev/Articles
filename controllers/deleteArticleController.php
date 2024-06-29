<?php
include_once "connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM articles WHERE id = $id";

    if (mysqli_query($connect, $query)) {
        $_SESSION['message'] = "Artikel berhasil dihapus.";
        header("Location: ../admin/index.php");
        exit();
    } else {
        $_SESSION['message'] = "Terjadi kesalahan saat menghapus artikel.";
        header("Location: ../admin/index.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Terjadi kesalahan saat menghapus artikel.";
    header("Location: ../admin/index.php");
    exit();
}