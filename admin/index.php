<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/authenticate.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/getArticleController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | Admin</title>
    <link rel="stylesheet" href="../assets/css/datatables.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"> -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <main>
        <section class="container py-5">
            <div class="mb-5 d-flex justify-content-between" style="align-items: center; width: 100%">
                <h1 style="font-size: 30px">Tabel Artikel</h1>
                <div>
                    <a href="/admin/add" class="btn btn-primary">Tambah</a>
                    <form action="/controllers/LogoutController.php" method="POST" style="display: inline;">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>

                </div>
            </div>
            <?php if (isset($_SESSION['message'])): ?>
                <p class="alert alert-info" role="alert">
                    <?= $_SESSION['message']; ?>
                    <?php unset($_SESSION['message']); ?>
                </p>
            <?php endif ?>
            <table id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th data-orderable="false" class="text-center">Gambar</th>
                        <th width="200px">Judul</th>
                        <th>Konten</th>
                        <th width="200px">Tanggal Terbit</th>
                        <th width="200px" class="text-center" data-orderable="false">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td class="text-center"><?= $article['id'] ?></td>
                            <td><img src="../assets/images/uploads/<?= $article['image_path'] ?>"
                                    alt="<?= $article['title'] ?>-img" width="100"></td>
                            <td><?= $article['title'] ?></td>
                            <td>
                                <?php
                                $text = $article['content'];
                                $words = explode(' ', $text);
                                $limited_words = array_slice($words, 0, 20);
                                $limited_text = implode(' ', $limited_words);
                                echo "<p class='card-text'>$limited_text...</p>";
                                ?>
                            </td>
                            <td><?= $article['created_at'] ?></td>
                            <td class="text-center">
                                <a class="btn btn-primary text-white" href="/admin/edit?id=<?= $article['id'] ?>">Edit</a>
                                <form action="../../controllers/deleteArticleController.php" style="display: inline;"
                                    method="POST">
                                    <input type="hidden" name="id" value="<?= $article['id'] ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script> -->
    <script src="../assets/js/datatables.min.js"></script>
    <script>let table = new DataTable('#myTable');
    </script>
</body>

</html>