<?php 

use App\Lib\Utils;

$article = $data['article'];

render("navbar");?>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <img src="<?= UPLOAD_PATH . $article['thumbnail'] ?>" class="rounded object-fit-cover w-100 mb-5" height="320" alt="<?= $article['judul'] ?>">
      <span class="text-uppercase text-primary fw-medium mb-0"><?= $article['kategori'] ?></span>
      <h1 class="fw-bold display-5"><?= $article['judul'] ?></h1>
      <span class="text-muted"><?= $article["penulis"] ?> • </span>
      <span class="text-muted"><?= Utils::formatDate($article['dibuat']) ?></span>
      <div class="mt-4 mb-5">
        <p>
          <pre class="lead fw-normal"><?= $article['konten'] ?></pre>
        </p>
      </div>
    </div>
  </div>
</div>



