<?php
include "components/Navigation.php";
include_once "controllers/getArticleController.php";
?>

<main>
    <section class="container" id="hero">
        <div class="row justify-content-center align-items-center" style="height: 90vh;">
            <div class="col-md-6">
                <h1 style="font-weight: bold !important; color: #FCEE21;">Artikel terbaru untuk membantu Anda
                    meningkatkan pengetahuan dan keterampilan Anda.</h1>
                <p class="my-5 text-white">Temukan berbagai artikel informatif dan terpercaya untuk membantu Anda tetap
                    terkini dengan berita dan informasi terbaru di berbagai bidang. Bergabunglah dengan Newsletter kami
                    dan dapatkan pemberitahuan ketika artikel-artikel baru dipublikasikan.</p>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email Address"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn"
                            style="border-radius: 0 2px 2px 0; background-color: #FCEE21; color: #183114" type="button"
                            id="button-addon2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="assets/images/hero.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section id="artikel" style="min-height: 100vh; background-color: #F3F4D3;">
        <div class="container py-5">
            <h2 class="text-center" style="font-weight: bold !important; color: #183114; font-size: 30px !important;">
                Artikel
                Terbaru</h2>
            <div class="row my-5 gap-3">
                <?php foreach ($articles as $article): ?>
                    <div class="col-md-4 my-3">
                        <div class="card d-flex justify-content-between align-items-center"
                            style="width: 100%; height: 500px;">
                            <div style="width: 100%;">
                                <div class="card-header" style="width: 100%;">
                                    <div class="text-center my-3">
                                        <img src="assets/images/uploads/<?= $article['image_path'] ?>"
                                            class="card-img-top mx-auto" style="max-height: 200px; max-width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
                                        $text = $article['title'];
                                        $words = explode(' ', $text);
                                        $limited_words = array_slice($words, 0, 2);
                                        $limited_text = implode(' ', $limited_words);
                                        echo "$limited_text...";
                                        ?>
                                    </h5>
                                    <?php
                                    $text = $article['content'];
                                    $words = explode(' ', $text);
                                    $limited_words = array_slice($words, 0, 6);
                                    $limited_text = implode(' ', $limited_words);
                                    echo "<p class='card-text'>$limited_text...</p>";
                                    ?>
                                    <p><?= $article['created_at'] ?> WIB</p>
                                </div>
                            </div>
                            <div class="pb-3">
                                <a href="/artikel?id=<?= $article['id'] ?>" class="btn btn-primary">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </section>
</main>


<?php include "components/Footer.php" ?>