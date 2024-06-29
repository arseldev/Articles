<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/authenticate.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | Admin Add Article</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Artikel Baru</h1>
        <form action="../../controllers/addArticleController.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten Artikel</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="gambar" name="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Artikel</button>
        </form>
    </div>
</body>

</html>