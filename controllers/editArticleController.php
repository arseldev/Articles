<?php
include "connect.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['judul']) && isset($_POST['konten'])) {
        // Mendapatkan data dari form
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $konten = $_POST['konten'];

        if (!empty($_FILES['gambar']['name'])) {
            $gambar = $_FILES['gambar'];
            $gambar_name = $gambar['name'];
            $gambar_tmp = $gambar['tmp_name'];

            $upload_dir = "../assets/images/uploads/";
            $target_file = $upload_dir . basename($gambar_name);

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($gambar_tmp);
            if ($check !== false && $gambar['size'] <= 5000000) {
                if (move_uploaded_file($gambar_tmp, $target_file)) {
                    $query = "UPDATE articles SET title='$judul', content='$konten', image_path='$gambar_name' WHERE id=$id";
                } else {
                    $_SESSION['message'] = "Terjadi kesalahan saat mengupload gambar.";
                }
            } else {
                $_SESSION['message'] = ($check === false) ? "Maaf, file yang diupload bukan gambar." : "Maaf, ukuran gambar terlalu besar.";
            }
        } else {
            $query = "SELECT image_path FROM articles WHERE id=$id";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($result);
            $gambar_name = $row['image_path'];

            $query = "UPDATE articles SET title='$judul', content='$konten' WHERE id=$id";
        }

        $result = mysqli_query($connect, $query);

        if ($result) {
            $_SESSION['message'] = "Artikel berhasil diupdate.";
        } else {
            $_SESSION['message'] = "Terjadi kesalahan saat mengupdate artikel.";
        }
    } else {
        $_SESSION['message'] = "Terjadi kesalahan saat mengupdate artikel.";
    }
}

header("Location: ../admin/index.php");
