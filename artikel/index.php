<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/Navigation.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/getArticleController.php";

try {
    $article_id = $_GET['id'];

    $query = "SELECT * FROM articles WHERE id = $article_id";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $article = mysqli_fetch_assoc($result);
    } else {
        throw new Exception("Artikel tidak ditemukan.");
    }
    ?>
    <div class="container-fluid py-5" style="min-height: 100vh; background-color: #F3F4D3;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-5" style="font-weight: bold !important; color: #183114; font-size: 30px !important;">
                    <?php echo $article['title']; ?>
                </h2>
                <div class="text-center">
                    <img src="/assets/images/uploads/<?php echo $article['image_path']; ?>" class="img-fluid"
                        alt="<?php echo $article['title']; ?>">
                </div>
                <p class="my-5" style="color: #444;"><?php echo $article['content']; ?></p>
                <a href="/" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
    <?php
} catch (Exception $e) {
    echo "
    <div class='container-fluid py-5' style='min-height: 100vh; background-color: #F3F4D3;'>
        <div class='container'>
            <h3>{$e->getMessage()}</h3>
            <a href='/' class='btn btn-primary'>Kembali</a>
        </div>
    </div>
    ";
} finally {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/components/Footer.php";
}
?>