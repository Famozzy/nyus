<?php 
use App\Lib\Utils;

$articles = $data["articles"];
$featured = array_shift($articles);

render("navbar"); ?>
<section class="container">
  <div class="row mt-5">
    <div class="col-lg-10 mx-auto">
      <div class="row pb-4 border-bottom">
        <div class="col-lg-8">
          <a href="/article?id=<?= $featured["id"] ?>">
            <img src="<?= UPLOAD_PATH . $featured["thumbnail"] ?>" alt="thumbnail" height="400" class="rounded ratio ratio-16x9 object-fit-cover" />
          </a>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-center mt-3">
          <a href="/article?id=<?= $featured["id"] ?>" class="text-decoration-none text-dark">
            <span class="text-primary fw-medium text-uppercase"><?= $featured["kategori"] ?></span>
            <h2 class="fw-bold fs-2"><?= $featured["judul"] ?></h2>
            <p class="fs-6 lead">
              <?= Utils::limitWords($featured["konten"], 24) ?>
            </p>
          </a>
          <div>
            <span class="text-capitalize d-block fw-medium"><?= $featured["penulis"] ?></span>
            <span class="fw-light fs-6 text-muted"><?= Utils::formatDate($featured["tgl_dibuat"]) ?> • </span>
            <span class="fw-light fs-6 text-muted"><?= Utils::calculateReadTime($featured["konten"]) ?> menit baca</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row col-lg-10 mx-auto mt-4 px-0">
      <?php
      foreach ($articles as $article):
      $readTime = Utils::calculateReadTime($article["konten"]);
      ?>
      <div class="col-md-4 mb-5 bg-transparent">
        <div class="card border-0">
          <a href="/article?id=<?= $article["id"] ?>">
            <img 
              src="<?= UPLOAD_PATH . $article["thumbnail"] ?>" 
              alt="thumbnail" 
              class="card-img-top object-fit-cover rounded" height="200" 
            />
          </a>
          <div class="card-body px-0">
            <a href="/article?id=<?= $article["id"] ?>" class="text-decoration-none text-dark">
              <span class="text-primary fw-medium text-uppercase"><?= $article["kategori"] ?></span>
              <h2 class="fw-bold fs-4"><?= $article["judul"] ?></h2>
              <p class="lead fs-6">
                <?= Utils::limitWords($article["konten"], 12) ?>
              </p>
            </a>
            <div class="mt-3">
              <span class="text-capitalize d-block fw-medium"><?= $article["penulis"] ?></span>
              <span class="fw-light fs-6 text-muted"><?= Utils::formatDate($article["tgl_dibuat"]) ?> • </span>
              <span class="fw-light fs-6 text-muted"><?= $readTime ?> menit baca</span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>