<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/authenticate.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/getArticleController.php";
$article_id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id = $article_id";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    $article = mysqli_fetch_assoc($result);
} else {
    header("Location: ../../");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | Admin Edit Article</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Artikel</h1>
        <form action="../../controllers/editArticleController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $article['id'] ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Artikel</label>
                <input type="text" value="<?= $article['title'] ?>" class="form-control" id="judul" name="judul"
                    required>
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten Artikel</label>
                <textarea class="form-control" id="konten" name="konten" rows="5"
                    required><?= $article['content'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Edit Artikel</button>
        </form>
    </div>
</body>

</html>